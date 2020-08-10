<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnonceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonce', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->longtext('contenu');
            $table->enum('type', ['recrutement_extra', 'recrutement_prestataire','investissement','sponsoring']);
            $table->timestamps();
       
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('evenement_id')->references('id')->on('evenement');
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
        Schema::table('annonce', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('annonce', function(Blueprint $table){
            $table->dropForeign('annonce_user_id_foreign');
                 });
      
        Schema::dropIfExists('annonce');
    }
}