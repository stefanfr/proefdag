<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("product_information_id");
//            $table->foreign("product_information_id")
//                ->references("id")->on("product_information")
//                ->onDelete('cascade');
            $table->integer("sales_information_id");
//            $table->foreign("sales_information_id")
//                ->references("id")->on("sales_information")
//                ->onDelete('cascade');
            $table->integer("amount", false, true)->length(4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sale_products');
    }
}
