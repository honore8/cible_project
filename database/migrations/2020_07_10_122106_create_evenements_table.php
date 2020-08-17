<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenements', function(Blueprint $table) {
			$table->id();
			$table->string('dates');
			$table->text('acteurs_principaux');
			$table->enum('type_event', array('gratuit', 'payant'));
			$table->longText('description');
			$table->enum('statut', array('reporté', 'annulé'))->nullable();
			$table->string('url_doc')->nullable();
			$table->string('url_image');
            $table->longText('importance');
            $table->longText('categorie_event');
			$table->text('invites_speciaux');
            $table->boolean('colation')->nullable();
            $table->string('pays');
			$table->string('ville');
            $table->string('adresse');
            $table->boolean('signaler')->default(false);
            $table->boolean('public')->default(false);
            $table->binary('localisation');
			$table->timestamps();
			$table->softDeletes();
			$table->foreignId('organisateur_id')->references('id')->on('organisateurs');
           
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evenements', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
     
                 
        Schema::dropIfExists('evenements');
    }
}


