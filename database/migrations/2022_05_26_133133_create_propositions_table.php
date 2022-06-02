<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propositions', function (Blueprint $table) {
            $table->bigIncrements('numProposition');
            $table->date('dateProposition');
            $table->bigInteger('numCulture');
            $table->bigInteger('numAgronomme');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('numCulture')->references('numCulture')->on('cultures')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('numAgronomme')->references('numAgronomme')->on('agronommes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propositions');
    }
}
