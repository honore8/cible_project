<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravaillerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travailler', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('evenement_id')->references('id')->on('evenement');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('travailler', function(Blueprint $table){
            $table->dropForeign('objet_user_id_foreign');
                 });
           
        Schema::table('travailler', function(Blueprint $table){
            $table->dropForeign('travailler_evenement_id_foreign');
                 });
        Schema::dropIfExists('objet');
    }
}