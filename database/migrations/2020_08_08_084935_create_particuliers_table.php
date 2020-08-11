<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateParticuliersTable extends Migration {

	public function up()
	{
		Schema::create('particuliers', function(Blueprint $table) {
			$table->id();
			$table->string('nom');
			$table->string('prenom');
			$table->datetime('date_nais');
			$table->enum('genre', array('F', 'G'));
			$table->string('profession');
			$table->string('situation_mat');
			$table->foreignId('user_id')->references('id')->on('users');
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('particuliers');
		Schema::table('particuliers', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
		Schema::table('particuliers', function(Blueprint $table){
            $table->dropForeign('particulier_user_id_foreign');
                 });
	}
}