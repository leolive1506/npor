<?php

use App\Models\StudentClass;
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
        Schema::create('user_student_classes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('student_class_id');
            $table->timestamps();

            $usersTableName = with(new User())->getTable();
            $studentClassTableName = with(new StudentClass())->getTable();

            $table->foreign('user_id')->references('id')->on($usersTableName);
            $table->foreign('student_class_id')->references('id')->on($studentClassTableName);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_student_classes');
    }
};
