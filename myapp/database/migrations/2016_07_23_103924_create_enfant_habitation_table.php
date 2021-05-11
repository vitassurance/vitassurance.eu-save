<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnfantHabitationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('enfant_habitations', function(Blueprint $table)
        {
        $table->increments('id');
            $table->integer('habitation_id')->unsigned();
            $table->foreign('habitation_id')->references('id')->on('habitations');
            $table->integer('dateNaissanceEnfant');
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
        Schema::drop('enfant_habitations'); 
    }
}
