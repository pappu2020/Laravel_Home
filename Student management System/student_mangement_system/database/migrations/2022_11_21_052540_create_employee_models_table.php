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
        Schema::create('employee_models', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("phoneNum");
            $table->string("email");
            $table->string("password");
            $table->integer("postion");
            $table->string("fatherName");
            $table->string("motherName");
            $table->integer("gurdianPhone")->nullable();
            $table->integer("nationalid");
            $table->integer("birthRegNum")->nullable();
            $table->date("dob");
            $table->string("bloodGrp");
            $table->string("religion");
            $table->string("Gender");
            $table->string("Howtoknowaboutus")->nullable();
            $table->string("presentAddress");
            $table->string("parmanentAddress");
            $table->integer("created_by");
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
        Schema::dropIfExists('employee_models');
    }
};
