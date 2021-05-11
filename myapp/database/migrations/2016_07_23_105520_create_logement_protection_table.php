<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogementProtectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logement_protections', function(Blueprint $table)
        {
        $table->increments('id');
            $table->integer('habitation_id')->unsigned();
            $table->foreign('habitation_id')->references('id')->on('habitations');
            $table->string('typeProtection');
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
        Schema::drop('logement_protections'); 
    }
}
