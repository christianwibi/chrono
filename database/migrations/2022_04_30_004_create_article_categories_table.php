<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('article_categories')) {
            Schema::create('article_categories', function (Blueprint $table) {
                $table->integer("id")->autoIncrement();
                $table->integer("article_id");
                $table->integer("category_id");
                $table->timestamps();

                $table->foreign('article_id')->references('id')->on('articles');
                $table->foreign('category_id')->references('id')->on('categories');
            });
        };
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_categories');
    }
}
