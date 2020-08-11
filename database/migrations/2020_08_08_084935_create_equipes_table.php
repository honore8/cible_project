<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEquipesTable extends Migration {

	public function up()
	{
		Schema::create('equipes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nom');
			$table->string('prenom');
			$table->string('titre');
			$table->softDeletes();
			$table->string('annee_experience');
			$table->timestamps();
		    $table->foreignId('organisateur_id')->references('id')->on('organisateurs');
		});
	}

	public function down()
	{  Schema::table('equipes', function(Blueprint $table){
          $table->dropForeign('equipe_organisateur_id_foreign');
                 });
		Schema::drop('equipes');
	}
}