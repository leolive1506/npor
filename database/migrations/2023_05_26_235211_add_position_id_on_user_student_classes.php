<?php

use App\Models\Position;
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
        Schema::table('user_student_classes', function (Blueprint $table) {
            $table->unsignedBigInteger('position_id')->nullable();

            $positionTableName = with(new Position())->getTable();
            $table->foreign('position_id')->references('id')->on($positionTableName);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_student_classes', function (Blueprint $table) {
            $table->dropForeign('user_student_classes_position_id_foreign');
            $table->dropColumn('position_id');
        });
    }
};
