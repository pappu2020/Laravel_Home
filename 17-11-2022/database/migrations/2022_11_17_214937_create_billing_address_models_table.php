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
        Schema::create('billing_address_models', function (Blueprint $table) {
            $table->id();
            $table->string("order_id");
            $table->integer("customer_id");
            $table->string("name");
            $table->string("email");
            $table->integer("phone");
            $table->string("company")->nullable();
            $table->string("Address");
            $table->string("Zip");
            $table->integer("country_id");
            $table->integer("city_id");
            $table->string("notes")->nullable();
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
        Schema::dropIfExists('billing_address_models');
    }
};
