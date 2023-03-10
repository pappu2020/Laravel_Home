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
        Schema::create('recent_work_number_models', function (Blueprint $table) {
            $table->id();
            $table->string("recentNumberIcon");
            $table->integer("recentNumber");
            $table->string("recentNumberTitle");
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
        Schema::dropIfExists('recent_work_number_models');
    }
};
