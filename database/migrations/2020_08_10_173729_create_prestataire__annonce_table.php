<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestataireAnnonceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestataire__annonce', function (Blueprint $table) {
            $table->id();
            $table->foreignId('annonce_id')->references('id')->on('annonces');
            $table->foreignId('prestataire_id')->references('id')->on('prestataires');
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
        Schema::table('prestataire_annonce', function(Blueprint $table){
			$table->dropSoftDeletes();
                 });
            
        Schema::dropIfExists('prestataire__annonce');
    }
}
