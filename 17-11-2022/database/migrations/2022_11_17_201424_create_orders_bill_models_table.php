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
        Schema::create('orders_bill_models', function (Blueprint $table) {
            $table->id();
            $table->string("order_id");
            $table->integer("customer_id");
            $table->integer("sub_total");
            $table->integer("Discount")->nullable();
            $table->integer("Delivery_charge")->nullable();
            $table->integer("Total_amount");
            $table->integer("payment_method");
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
        Schema::dropIfExists('orders_bill_models');
    }
};
