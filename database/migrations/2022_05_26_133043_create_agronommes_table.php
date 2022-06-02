<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgronommesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agronommes', function (Blueprint $table) {
            $table->bigIncrements('numAgronomme');
            $table->string('nom');
            $table->string('prenom');
            $table->string('tel');
            $table->string('niveauEtude');
            $table->bigInteger('numPersonne');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('numPersonne')->references('numPersonne')->on('personnes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agronommes');
    }
}
