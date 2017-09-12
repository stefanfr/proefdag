<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSegmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_segments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("product_information_id");
//            $table->foreign("product_information_id")
//                ->references("id")->on("product_information")
//                ->onDelete('cascade');
            $table->string("segment", 40);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_segments');
    }
}
