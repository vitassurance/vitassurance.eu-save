<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanteenfantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santeenfants', function(Blueprint $table)
        {
        $table->increments('id');
            $table->integer('sante_id')->unsigned();
            $table->foreign('sante_id')->references('id')->on('santes');
            $table->string('dateNaissanceEnfant');
            $table->string('regimeEnfant');
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
        Schema::drop('santeenfants');
    }
}
