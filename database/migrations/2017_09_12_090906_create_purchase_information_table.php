<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_information', function (Blueprint $table) {
            $table->increments('id');
            $table->double("price", 3, 2);
            $table->integer("shelf_life", false, true)->length(3);
            $table->string("supplier", 80);
            $table->integer("stock_delivered", false, true)->length(4);
            $table->integer("delivery_time", false, true)->length(3);
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
        Schema::dropIfExists('purchase_information');
    }
}
