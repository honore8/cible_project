<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   
	public function up()
	{
		Schema::create('entreprises', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('raison_sociale');
			$table->datetime('annee_creation');
			$table->string('url_piece');
			$table->foreignId('user_id')->references('id')->on('users');
		});
	}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('entreprises', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('entreprises', function(Blueprint $table){
            $table->dropForeign('entreprise_user_id_foreign');
                 });
                 
        Schema::dropIfExists('entreprises');
    }
}
