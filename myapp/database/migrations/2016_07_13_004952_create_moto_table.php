<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motos', function(Blueprint $table)
        {
            
            $table->increments('id');
            $table->integer('prospect_id')->unsigned();
            $table->foreign('prospect_id')->references('id')->on('prospects');
            $table->string('typeVehicule');
            $table->string('cylindreeMoto');
            $table->string('motoConcerner');
            $table->date('dateNaissance');
            $table->string('situationMatrimoniale');
            $table->string('profession');
            $table->string('typePermis');
            $table->string('datePermisMois');
            $table->string('datePermisAnnee');
            $table->string('infraction');
            $table->string('dateAchatVehicule');
            $table->string('datePremiereCirculationMois');
            $table->string('datePremiereCirculationAnnee');
            $table->string('codePostalNuit');
            $table->boolean('dejaAssuree');
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
         Schema::drop('motos'); 
    }
}
