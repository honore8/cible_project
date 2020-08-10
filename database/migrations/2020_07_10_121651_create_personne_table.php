<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personne', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_naissance');
            $table->enum('sexe', ['F', 'G']);
            $table->string('telephone');
            $table->string('ville');
            $table->string('adresse');
            $table->string('Profession')->nullable();
            $table->binary('piece_jointe')->nullable();
            $table->timestamps();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->softDeletes();
               
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('personne', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('personne', function(Blueprint $table){
            $table->dropForeign('personne_user_id_foreign');
                 });
                 
        Schema::dropIfExists('personne');
    }
}
