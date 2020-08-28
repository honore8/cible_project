<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganisateursTable extends Migration {

	public function up()
	{
		Schema::create('organisateurs', function(Blueprint $table) {
			$table->id();
			$table->string('methode_de_travail');
			$table->text('valeurs')->nullable();
			$table->string('url_image');
			$table->string('reseaux_sociaux');
			$table->longText('conditions_paiement')->nullable();
			$table->text('pourquoi_vous');
			$table->text("materiel");
			$table->timestamps();
			$table->softDeletes();
			$table->foreignId('user_id')->references('id')->on('users');
		});
	}

	public function down() 
	{

		Schema::table('organisateurs', function(Blueprint $table){
			$table->dropSoftDeletes();
                 });
		Schema::table('organisateurs', function(Blueprint $table){
            $table->dropForeign('organisateur_user_id_foreign');
                 });
		
		Schema::dropIfExists('organisateurs');
	}
}