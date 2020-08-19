<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateInvestisseursTable extends Migration {

	public function up()
	{
		Schema::create('investisseurs', function(Blueprint $table) {
		    $table->id();
			$table->enum('critere_age', array('5', '10', '11'))->nullable();
			$table->string('acheter_investir');
			$table->text('specialites')->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->foreignId('user_id')->references('id')->on('users');
		});
	}

	public function down()
	{
		Schema::table('investisseurs', function(Blueprint $table){
			$table->dropSoftDeletes();
                 });
		Schema::drop('investisseurs');
		
	}
}