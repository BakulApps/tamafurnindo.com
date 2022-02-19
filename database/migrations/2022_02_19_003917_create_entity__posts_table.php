<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntityPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_entity__articles', function (Blueprint $table) {
            $table->id('article_id');
            $table->string('article_title');
            $table->text('article_content');
            $table->string('article_image');
            $table->string('article_category');
            $table->string('article_tag');
            $table->string('article_author');
            $table->boolean('article_is_commented');
            $table->string('article_comment');
            $table->timestamps();
        });

        Schema::create('post_entity__categories', function (Blueprint $table){
            $table->id('category_id');
            $table->string('category_name');
            $table->string('category_desc');
        });

        Schema::create('post_entity__tags', function (Blueprint $table){
            $table->id('tag_id');
            $table->string('tag_name');
            $table->string('tag_desc');
        });

        Schema::create('post_entity__comments', function (Blueprint $table){
            $table->id('comment_id');
            $table->string('comment_parent')->nullable();
            $table->string('comment_author');
            $table->string('comment_email');
            $table->string('comment_subject');
            $table->text('comment_message');
            $table->string('comment_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_entity__articles');
        Schema::dropIfExists('post_entity__categories');
        Schema::dropIfExists('post_entity__tags');
        Schema::dropIfExists('post_entity__comments');
    }
}
