<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelMTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelMotos', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('marque_id')->unsigned();
            $table->foreign('marque_id')->references('id')->on('marqueMotos');
            $table->integer('cylindree_id')->unsigned();
            $table->foreign('cylindree_id')->references('id')->on('cylindrees');
           
           $table->string('libelle');
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
        Schema::drop('modelMotos');
    }
}
