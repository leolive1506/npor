<?php

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
        Schema::table('fragment_values', function (Blueprint $table) {
            $table->bigInteger('value_total')->nullable()->change();
            $table->unsignedBigInteger('closed_by')->nullable()->change();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fragment_values', function (Blueprint $table) {
            $table->bigInteger('value_total')->change();
            $table->unsignedBigInteger('closed_by')->change();
            $table->dropSoftDeletes();
        });
    }
};
