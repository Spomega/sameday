<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('cars',function(Blueprint $table){
             
            $table->increments('id');
            $table->string('vinnumber'); 
            $table->string('carmake');
            $table->string('caryear');
            $table->string('price');
            $table->string('color');
            $table->string('milleage');
            $table->string('vehicletype');
            $table->string('enginetype');
            $table->string('transmission');
            $table->string('fuel');
            $table->string('damage');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
            $table->string('image5'); 
            $table->string('status');
            $table->timestamps();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
         Schema::drop('items');
    }
}
