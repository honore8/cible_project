<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeurOrganisateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandeur_organisateur', function (Blueprint $table) {
            $table->id();
            $table->foreignId('demandeur_id')->references('id')->on('demandeurs');
            $table->foreignId('organisateur_id')->references('id')->on('organisateurs');
            $table->softDeletes();
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
        Schema::table('demandeur_organisateur', function(Blueprint $table){
			$table->dropSoftDeletes();
                 });
        Schema::dropIfExists('demandeur_organisateur');
    }
}
