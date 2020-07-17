<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountrysTable extends Migration {

	public function up()
	{
		Schema::create('countrys', function(Blueprint $table) {
			$table->timestamps();
			$table->string('countrycode', 3)->primary();
			$table->string('countryname', 200);
			$table->string('code', 2)->nullable()->default(NULL);
		});
	}

	public function down()
	{
		Schema::drop('countrys');
	}
}