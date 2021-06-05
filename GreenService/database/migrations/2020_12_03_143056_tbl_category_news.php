<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCategoryNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_category_news', function (Blueprint $table) {
            $table->Increments('cate_news_id');
            $table->string('cate_news_name');
            $table->string('cate_news_slug');
            $table->integer('cate_news_status');
            $table->string('cate_news_desc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_category_news');
    }
}
