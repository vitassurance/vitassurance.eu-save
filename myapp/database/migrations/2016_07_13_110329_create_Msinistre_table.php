<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsinistreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Msinistres', function(Blueprint $table)
        {
        $table->increments('id');
            $table->integer('moto_id')->unsigned();
            $table->foreign('moto_id')->references('id')->on('motos');
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
        Schema::drop('Msinistres');
    }
}
