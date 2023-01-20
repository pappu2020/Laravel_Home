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
        Schema::create('order_items_models', function (Blueprint $table) {
            $table->id();
            $table->string("order_id");
            $table->integer("customer_id");
            $table->integer("product_id");
            $table->integer("price");
            $table->integer("color")->nullable();
            $table->integer("size")->nullable();
            $table->integer("quantity");
            $table->string("review")->nullable();
            $table->integer("star")->nullable();
           
          
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
        Schema::dropIfExists('order_items_models');
    }
};
