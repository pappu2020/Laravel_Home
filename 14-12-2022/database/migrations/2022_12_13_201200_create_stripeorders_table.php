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
        Schema::create('stripeorders', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->integer("phone");
            $table->string("address");
          
            $table->integer("customer_id");
            $table->string("billCompany")->nullable();
            $table->integer("billCountry");
            $table->integer("billCity");
            $table->string("billZip")->nullable();
            $table->string("billAdditionalInfo")->nullable();
            $table->integer("charge");
            $table->integer("payment_method");
            $table->integer("totalAmountForCartPage");
            $table->integer("subTotalAmountForCartPage");
            $table->integer("discountForCartPage")->nullable();
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
        Schema::dropIfExists('stripeorders');
    }
};
