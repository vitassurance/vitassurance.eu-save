<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('habitation_equipements', function(Blueprint $table)
        {
        $table->increments('id');
            $table->integer('habitation_id')->unsigned();
            $table->foreign('habitation_id')->references('id')->on('habitations');
            $table->string('equipement');
            $table->float('surfaceVeranda');
            $table->float('surfaceAnnexe');
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
    }
}
