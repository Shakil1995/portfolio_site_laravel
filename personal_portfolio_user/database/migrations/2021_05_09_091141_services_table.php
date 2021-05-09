<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ServicesTable extends Migration
{

    public function up()
    {
        Schema::create('services',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('services_name');
            $table->string('service_des');
            $table->string('service_img');

        });

//        Schema::create('services',function(Blueprint $table){
//            $table->bigIncrements('id');
//            $table->string('service_name');
//            $table->string('service_des');
//            $table->string('service_img');
//        });

    }


    public function down()
    {

    }
}
