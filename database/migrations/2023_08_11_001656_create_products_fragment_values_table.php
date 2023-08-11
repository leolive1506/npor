<?php

use App\Models\FragmentValue;
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
        Schema::create('products_fragment_values', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80)->index();
            $table->bigInteger('value');
            $table->smallInteger('quantity')->default(1);
            $table->unsignedBigInteger('fragment_value_id');

            $fragmentValueTable = with(new FragmentValue())->getTable();
            $table->foreign('fragment_value_id')->references('id')->on($fragmentValueTable);
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
        Schema::dropIfExists('products_fragment_values');
    }
};
