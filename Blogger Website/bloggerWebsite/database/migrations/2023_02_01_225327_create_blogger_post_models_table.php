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
        Schema::create('blogger_post_models', function (Blueprint $table) {
            $table->id();
            $table->integer("author_id");
            $table->integer("category_id");
            $table->integer("tag_id")->nullable();
            $table->string("title");
            $table->longText("description");
            $table->string("featured_img");
            $table->string("slug");
            $table->string("status");
            $table->integer("readTime");
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
        Schema::dropIfExists('blogger_post_models');
    }
};
