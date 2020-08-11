<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobersTable extends Migration {

	public function up()
	{
		Schema::create('jobers', function(Blueprint $table) {
			$table->id();
			$table->string('jobs');
			$table->text('ce_que_vous_aimez');
			$table->text('ce_que_vous_n_aimez_pas');
			$table->float('cout_min');
			$table->float('cout_max');
			$table->boolean('moyen_de_deplacement');
			$table->string('handicap');
			$table->timestamps();
			$table->softDeletes();
			$table->foreignId('user_id')->references('id')->on('users');
		});
	}

	public function down()
	{
		Schema::table('jobers', function(Blueprint $table){
            $table->dropForeign('jober_user_id_foreign');
                 });
		Schema::drop('jobers');
	}
}