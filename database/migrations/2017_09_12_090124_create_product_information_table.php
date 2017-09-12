<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_information', function (Blueprint $table) {
            $table->increments('id');
            $table->string("product_name", 60);
            $table->string("sku", 10);
            $table->integer("ean", false, true)->length(13);
            $table->double("price", 3, 2);
            $table->string("brand", 80);
            $table->integer("size", false, true)->length(5);
            $table->integer("stock", false, true)->length(4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_information');
    }
}
