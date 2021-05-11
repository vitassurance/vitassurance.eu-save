<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('habitations', function(Blueprint $table)
        {
        $table->increments('id');
            $table->integer('prospect_id')->unsigned();
            $table->foreign('prospect_id')->references('id')->on('prospects');
            $table->string('typeLogement');
            $table->string('etat');
            $table->string('typeResidence');
            $table->date('dateEffet');
            $table->string('codePostal');
            $table->string('ville');
            $table->string('recherche');
            $table->integer('nombrePieceM');
            $table->integer('nombrePieceP');
            $table->float('surfaceHabitable');


            $table->string('etageAppartement');
            $table->string('joursInhabite');
            $table->integer('capitalMobilier');


            $table->string('dernierAssureur');
            $table->boolean('monContratActuel');
            $table->integer('nombreAnnee');
            $table->string('bonusMalus');
            $table->string('objetResiliation');
            $table->string('assureurActuel');
            $table->string('niveauGarantie');
            $table->string('moisEcheance');

            $table->date('dateEffet');
            $table->string('niveauGarantieSouhaite');
            $table->string('codePostal');
            $table->string('ville');
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
        Schema::drop('habitations'); 
    }
}
