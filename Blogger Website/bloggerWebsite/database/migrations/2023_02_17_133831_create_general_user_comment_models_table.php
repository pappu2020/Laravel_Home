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
        Schema::create('general_user_comment_models', function (Blueprint $table) {
            $table->id();
            $table->integer("general_user_id");
            $table->string("commment");
            $table->integer("parent_id")->nullable();
            $table->integer("post_id");
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
        Schema::dropIfExists('general_user_comment_models');
    }
};
