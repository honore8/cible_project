<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrepriseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprise', function (Blueprint $table) {
            $table->id();
            $table->string('raison_sociale');
            $table->string('telephone');
            $table->string('ville');
            $table->string('adresse');
            $table->binary('piece_jointe')->nullable();
            $table->longText('activites');
            $table->string('statut_juridique')->nullable();
            $table->string('num_immatriculation')->nullable();
            $table->timestamps();
            $table->foreignId('user_id')->references('id')->on('users') ->onDelete('restrict');
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('entreprise', function(Blueprint $table){
            $table->dropForeign('entreprise_user_id_foreign');
                 });
                 
        Schema::dropIfExists('entreprise');
    }
}
