<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHsinistreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hsinistres', function(Blueprint $table)
        {
        $table->increments('id');
            $table->integer('habitation_id')->unsigned();
            $table->foreign('habitation_id')->references('id')->on('habitations');
            $table->string('typeSinistre');
            $table->date('date');
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
        Schema::drop('hsinistres'); 
    }
}
