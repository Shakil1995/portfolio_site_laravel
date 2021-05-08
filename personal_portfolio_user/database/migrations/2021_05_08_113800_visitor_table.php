<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VisitorTable extends Migration
{

    public function up()
    {
  Schema::create('visitor',function (Blueprint $table){
      $table->bigIncrements('id');
      $table->string('ip_address');
      $table->string('visit_time');

  });
    }


    public function down()
    {

    }
}