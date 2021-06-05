<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPostService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_post_service', function (Blueprint $table) {
            $table->Increments('post_service_id');
            $table->string('post_service_title');
            $table->string('post_service_desc');
            $table->string('post_service_content');
            $table->string('post_service_img');
            $table->string('post_service_metadesc');
            $table->string('post_service_metakeyword');
            $table->integer('post_service_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_post_service');
    }
}
