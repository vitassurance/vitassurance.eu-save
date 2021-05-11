<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function(Blueprint $table)
        {
            
            $table->increments('id');
            $table->integer('prospect_id')->unsigned();
            $table->foreign('prospect_id')->references('id')->on('prospects');
            $table->string('maRecherche');
            $table->string('possedeDepuis');
            $table->string('titulaireCarte');
            $table->string('conducteurSecondaire');
            $table->date('dateNaissance');
            $table->string('situationMatrimoniale');
            $table->string('profession');
            $table->string('professionExacte');
            $table->string('secteurActivite');
            $table->string('typePermis');
            $table->string('dateObtention');
            $table->string('infraction');
            $table->string('quandSRA');
            $table->string('dureeSR');
            $table->string('causeAnnulation');
            $table->date('dateAchatVehicule');
            $table->string('datePremiereCirculationMois');
            $table->string('datePremiereCirculationAnnee');
             $table->integer('nombreKiloAn');
             $table->string('modeFinancement');
              $table->string('usagePrevu');
              $table->string('typeParking');
            $table->string('codePostalNuit');
            $table->string('villeNuit');
            $table->string('codePostalTravail');
            $table->string('villeTravail');
            $table->string('marqueAuto');
            $table->string('modelAuto');
            $table->string('actuellementAssure');
            $table->integer('nombreAnnee');
            $table->string('bonusMalus');
            $table->string('objetResiliation');
            $table->string('assureurActuel');
            $table->string('niveauGarantie');
            $table->string('nonAssureDepuis');
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
        Schema::drop('autos'); 
    }
}
