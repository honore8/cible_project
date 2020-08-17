<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objets', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->enum('type', ['perdu', 'trouve']);
            $table->text('informations__declarant');
            $table->foreignId('declarant_id')->references('id')->on('users');
            $table->foreignId('evenement_id')->references('id')->on('evenements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('objets', function(Blueprint $table){
			$table->dropSoftDeletes();
                 });
        

        Schema::dropIfExists('objets');
    }
}
