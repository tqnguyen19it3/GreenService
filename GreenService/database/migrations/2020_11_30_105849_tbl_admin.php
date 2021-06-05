<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_admin', function (Blueprint $table) {
            $table->Increments('admin_id');
            $table->string('admin_name');
            $table->string('admin_phone');
            $table->string('admin_email');
            $table->string('admin_password');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_admin');
    }
}
