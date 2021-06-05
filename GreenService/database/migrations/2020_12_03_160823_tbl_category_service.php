<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCategoryService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_category_service', function (Blueprint $table) {
            $table->Increments('cate_service_id');
            $table->string('cate_service_name');
            $table->string('cate_service_slug');
            $table->integer('cate_service_status');
            $table->string('cate_service_desc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_category_service');
    }
}
