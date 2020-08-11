<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateExperiencesTable extends Migration {

	public function up()
	{
		Schema::create('experiences', function(Blueprint $table) {
		    $table->id();
			$table->timestamps();
			$table->softDeletes();
			$table->float('taux_client');
			$table->longText('taches');
			$table->string('references');
			$table->mediumText('commentaire');
			$table->string('url_img')->nullable();
			$table->string('annee');
			$table->string('evenement')->nullable();
			$table->foreignId('user_id')->references('id')->on('users');
			
		});
	}

	public function down()
	{
		
		 Schema::table('experiences', function(Blueprint $table){
            $table->dropForeign('experience_user_id_foreign');
                 });
		Schema::drop('experiences');
	}
}