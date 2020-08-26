<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeVenteInvestisssementsTable extends Migration {

	public function up()
	{
		Schema::create('demande_vente_investisssements', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->softDeletes();
			$table->text('chiffres_daffaires');
			$table->text('portefeuille');
			$table->string('statut_entreprise');
			$table->integer('rememberToken');
			$table->string('capital_entreprise');
			$table->enum('acheter_investir', ['acheter', 'investir']);
			$table->foreignId('organisateur_id')->references('id')->on('organisateurs');
		});
	}

	public function down()
	{  
		Schema::table('demande_vente_investisssements', function(Blueprint $table){
			$table->dropSoftDeletes();
                 });			 
		Schema::dropIfExists('demande_vente_investisssements');
	}
}