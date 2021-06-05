<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPostNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_post_news', function (Blueprint $table) {
            $table->Increments('post_news_id');
            $table->string('post_news_title');
            $table->string('post_news_desc');
            $table->string('post_news_content');
            $table->string('post_news_img');
            $table->string('post_news_metadesc');
            $table->string('post_news_metakeyword');
            $table->integer('post_news_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_post_news');
    }
}
