<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('articles')) {
            Schema::create('articles', function (Blueprint $table) {
                $table->integer("id")->autoIncrement();
                $table->string('title', 50);
                $table->text('content');
                $table->text('image')->nullable();
                $table->integer("created_by");
                $table->timestamps();
                $table->softDeletes();

                $table->foreign('created_by')->references('id')->on('users');
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
        Schema::dropIfExists('articles');
    }
}
