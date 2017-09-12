<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductNutritionalValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_nutritional_values', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("product_information_id");
            $table->foreign("product_information_id")
                ->references("id")->on("product_information")
                ->onDelete('cascade');
            $table->integer("energy", false, true)->length(4);
            $table->double("fats", 3, 2);
            $table->double("saturated_fats", 3, 2);
            $table->double("carbohydrates", 4, 2);
            $table->double("sugar", 4, 2);
            $table->double("proteins", 4, 2);
            $table->double("salt", 4, 3);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_nutritional_values');
    }
}
