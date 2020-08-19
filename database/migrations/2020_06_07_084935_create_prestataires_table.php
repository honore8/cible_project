<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreatePrestatairesTable extends Migration {

	public function up()
	{
		Schema::create('prestataires', function(Blueprint $table) {
			$table->id();
			$table->string('reseaux_sociaux')->nullable();
			$table->text('materiel');
			$table->timestamps();
			$table->softDeletes();
			$table->foreignId('user_id')->references('id')->on('users');
		});
	}

	public function down()
	{
		Schema::table('prestataires', function(Blueprint $table){
			$table->dropSoftDeletes();
                 });
		Schema::table('prestataires', function(Blueprint $table){
            $table->dropForeign('prestataire_user_id_foreign');
				 });
				 Schema::dropIfExists('prestataires');
		
	}
}