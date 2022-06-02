<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcellesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcelles', function (Blueprint $table) {
            $table->bigIncrements('numParcelle');
            $table->string('nature');
            $table->bigInteger('surface');
            $table->json('localisation');
            $table->bigInteger('numCulture');
            $table->bigInteger('numAgriculteur');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('numCulture')->references('numCulture')->on('cultures')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('numAgriculteur')->references('numAgriculteur')->on('agriculteurs')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcelles');
    }
}
