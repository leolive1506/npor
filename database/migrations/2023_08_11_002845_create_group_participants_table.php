<?php

use App\Models\GroupActivity;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_participants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('group_activity_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('deleted_by');
            $table->softDeletes();

            $groupActivityTable = with(new GroupActivity())->getTable();
            $table->foreign('group_activity_id')->references('id')->on($groupActivityTable);

            $userTable = with(new User())->getTable();
            $table->foreign('user_id')->references('id')->on($userTable);
            $table->foreign('deleted_by')->references('id')->on($userTable);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_participants');
    }
};
