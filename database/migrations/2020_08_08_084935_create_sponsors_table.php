<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateSponsorsTable extends Migration {

	public function up()
	{
		Schema::create('sponsors', function(Blueprint $table) {
			$table->id();
			$table->enum('type_event', array('gratuit', 'payant'));
			$table->text('genre_event');
			$table->string('lieux');
			$table->timestamps();
			$table->softDeletes();
		    $table->foreignId('user_id')->references('id')->on('users');
		});
	}

	public function down()
	{
		
		Schema::table('sponsors', function(Blueprint $table){
			$table->dropSoftDeletes();
                 });
	
		Schema::dropIfExists('sponsors');
		
	}
}