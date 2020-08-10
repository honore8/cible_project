<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvenementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenement', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('ville');
            $table->string('pays');
            $table->string('adresse');
            $table->datetime('date_debut');
            $table->datetime('date_fin')->nullable();
            $table->string('categorie');
            $table->string('type');
            $table->boolean('prive')->default(false);
            $table->boolean('professionnel')->default(false);;
            $table->boolean('social')->default(false);
            $table->boolean('communication')->default(false);
            $table->boolean('signaler')->default(false);
            $table->text('description')->nullable();
            $table->boolean('public')->default(false);
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->softDeletes();
            
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
        Schema::table('evenement', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('evenement', function(Blueprint $table){
            $table->dropForeign('evenement_user_id_foreign');
                 });
                 
        Schema::dropIfExists('evenement');
    }
}


