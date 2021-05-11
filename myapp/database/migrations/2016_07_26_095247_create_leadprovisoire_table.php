<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadprovisoireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leadprovisoires', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('produit_id')->unsigned();
            $table->foreign('produit_id')->references('id')->on('produits');
            $table->string('nom');
            $table->string('prenom');
             $table->date('dateNaissance');
              $table->date('dateEffet');
            $table->string('email');
            $table->string('emailPro');
            $table->string('tel');
            $table->string('mobile');
            $table->string('adresse');
            $table->string('situationMatrimoniale');
            $table->string('profession');
            $table->string('codePostal');
            $table->string('ville');
            $table->boolean('active');
            $table->integer('visionnage');
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
        Schema::drop('leadprovisoires');
    }
}
