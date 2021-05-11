<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObsequeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obseques', function(Blueprint $table)
        {
            
            $table->increments('id');
            $table->integer('prospect_id')->unsigned();
            $table->foreign('prospect_id')->references('id')->on('prospects');
            $table->string('interet');
            $table->string('montantConvert');
            $table->string('dateNaissance');
            $table->string('dateEffet');
            $table->string('codePostal');
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
        Schema::drop('obseques');
    }
}
