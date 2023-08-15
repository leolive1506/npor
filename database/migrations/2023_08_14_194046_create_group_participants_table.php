<?php

use App\Models\TypeGroupActivity;
use App\Models\UserStudentClass;
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
            $table->unsignedBigInteger('type_group_activity_id');
            $table->unsignedBigInteger('user_student_class_id')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->softDeletes();

            $typeGroupActivityTable = with(new TypeGroupActivity())->getTable();
            $table->foreign('type_group_activity_id')->references('id')->on($typeGroupActivityTable);

            $userStudentClassTable = with(new UserStudentClass())->getTable();
            $table->foreign('user_student_class_id')->references('id')->on($userStudentClassTable);
            $table->foreign('deleted_by')->references('id')->on($userStudentClassTable);

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
