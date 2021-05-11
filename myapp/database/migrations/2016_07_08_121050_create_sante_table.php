<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santes', function(Blueprint $table)
        {
            
            $table->increments('id');
            $table->integer('prospect_id')->unsigned();
            $table->foreign('prospect_id')->references('id')->on('prospects');
            $table->string('soins');
            $table->string('hospitalisation');
            $table->string('dentaire');
            $table->string('optique');
            $table->string('regime');
            $table->string('dateEffet');
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
        Schema::drop('santes'); 
    }
}
