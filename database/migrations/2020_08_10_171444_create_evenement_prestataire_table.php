<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvenementPrestataireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenement_prestataire', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evenement_id')->references('id')->on('evenements');
            $table->foreignId('prestataire_id')->references('id')->on('prestataires');
            $table->integer('note');
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
        Schema::table('evenement_prestataire', function(Blueprint $table){
			$table->dropSoftDeletes();
                 });
        
        Schema::dropIfExists('evenement_prestataire');
    }
}
