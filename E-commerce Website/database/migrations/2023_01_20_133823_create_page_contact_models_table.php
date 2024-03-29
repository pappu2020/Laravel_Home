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
        Schema::create('page_contact_models', function (Blueprint $table) {
            $table->id();
            $table->string("customerCareNum")->nullable();
            $table->string("careerNum")->nullable();
            $table->string("email")->nullable();
            $table->longText("address")->nullable();
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
        Schema::dropIfExists('page_contact_models');
    }
};
