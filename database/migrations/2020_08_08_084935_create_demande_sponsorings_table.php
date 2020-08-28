<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeSponsoringsTable extends Migration {

	public function up()
	{
		Schema::create('demande_sponsorings', function(Blueprint $table) {
			$table->id();
			$table->text('avantages');
			$table->text('besoins');
			$table->longText('demande');
			$table->datetime('date_limite');
			$table->string('contact');
			$table->text('beneficiaires');
			$table->boolean('actif')->default(true);
			$table->foreignId('evenement_id')->references('id') ->on('evenements');
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		          
      
		Schema::table('demande_sponsorings', function(Blueprint $table){
			$table->dropSoftDeletes();
                 });
        Schema::dropIfExists('demande_sponsorings');
	}
}