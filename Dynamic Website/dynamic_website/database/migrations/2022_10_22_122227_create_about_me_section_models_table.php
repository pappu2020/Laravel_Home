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
        Schema::create('about_me_section_models', function (Blueprint $table) {
            $table->id();
            $table->string("about_Exam_name");
            $table->integer("about_Exam_year");
            $table->integer("about_Exam_result");
          
            $table->integer("created_by");
            $table->softDeletes();
                
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
        Schema::dropIfExists('about_me_section_models');
    }
};
