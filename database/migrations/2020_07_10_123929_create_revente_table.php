<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReventeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revente', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('ticket_id')->nullable()->references('id') ->on('ticket');
            $table->foreignId('acheteur_id')->references('id')->on('users');
            $table->foreignId('vendeur_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::table('revente', function(Blueprint $table){
            $table->dropForeign('revente_acheteur_id_foreign');
                 });
           
        Schema::table('revente', function(Blueprint $table){
            $table->dropForeign('revente_vendeur_id_foreign');
                });
                
        
        Schema::dropIfExists('revente');
    }
}
