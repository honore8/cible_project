<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('taches');
			$table->string('dates');
			$table->float('cout', 12,2);
			$table->text('contacts');
			$table->datetime('date_limite');
			$table->string('url_charges')->nullable();
			$table->integer('nbpersonnes')->nullable();
			$table->text('exigeances')->nullable();
			$table->enum('type', array('prestataire', 'job'));
            $table->timestamps();
            $table->foreignId('prestataire_id')->references('id')->on('prestataires');
            $table->foreignId('jober_id')->references('id')->on('jobers');
            $table->foreignId('evenement_id')->references('id')->on('evenements');
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
        Schema::table('annonces', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('annonces', function(Blueprint $table){
            $table->dropForeign('annonce_jober_id_foreign');
                 });
				 
		  Schema::table('annonces', function(Blueprint $table){
            $table->dropForeign('annonce_evenement_id_foreign');
                 });
        Schema::table('annonces', function(Blueprint $table){
            $table->dropForeign('annonce_prestataire_id_foreign');
                 });
      
      
        Schema::dropIfExists('annonces');
    }
}
