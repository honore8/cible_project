<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRessourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ressources', function (Blueprint $table) {
            $table->id();
            $table->string('url_doc');
            $table->enum('type', ['ressource']);
            $table->foreignId('evenement_id')->references('id')->on('evenements');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ressources', function(Blueprint $table){
			$table->dropSoftDeletes();
                 });
        
        Schema::dropIfExists('ressources');
    }
}
