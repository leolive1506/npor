<?php

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
        Schema::create('fragment_values', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80)->index();
            $table->text('description');
            $table->bigInteger('value_total');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('closed_by');

            $table->timestamps();

            $userTableName = with(new User())->getTable();

            $table->foreign('created_by')->references('id')->on($userTableName);
            $table->foreign('closed_by')->references('id')->on($userTableName);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fragment_values');
    }
};
