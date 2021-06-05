<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPostCriteria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_post_criteria', function (Blueprint $table) {
            $table->Increments('post_criteria_id');
            $table->string('post_criteria_title');
            $table->string('post_criteria_content');
            $table->string('post_criteria_img');
            $table->integer('post_criteria_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_post_criteria');
    }
}
