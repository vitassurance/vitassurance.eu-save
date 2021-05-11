<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEmprunteurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emprunteurs', function (Blueprint $table) {
             $table->increments('id');
            $table->integer('prospect_id')->unsigned();
            $table->foreign('prospect_id')->references('id')->on('prospects');
            $table->integer('regime_id')->unsigned();
            $table->foreign('regime_id')->references('id')->on('regimes');
            $table->integer('profession_id')->unsigned();
            $table->foreign('profession_id')->references('id')->on('professions');
            $table->string('montantEmprunte');
            $table->float('taux');
            $table->string('duree');
            $table->string('optique');
            $table->string('regime');
            $table->string('dateEffet');
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
        Schema::table('emprunteurs', function (Blueprint $table) {
            //
        });
    }
}
