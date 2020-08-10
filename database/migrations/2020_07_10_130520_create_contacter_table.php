<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContacterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacter', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->references('id') ->on('users')->onDelete('cascade');
            $table->foreignId('demandeur_id')->references('id') ->on('demandeur')->onDelete('cascade');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    { Schema::table('contacter', function (Blueprint $table) {
        $table->dropSoftDeletes();
    });
        
        Schema::table('contacter', function(Blueprint $table){
            $table->dropForeign('contacter_user_id_foreign');
                 });
        Schema::table('reponse', function(Blueprint $table){
            $table->dropForeign('contacter_demandeur_id_foreign');
                });
        Schema::dropIfExists('contacter');
    }
}
