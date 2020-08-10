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
            $table->decimal('prix',8,0);
            $table->datetime('datetime');
            $table->timestamps();
            $table->foreignId('ticket_id')->references('id')->on('ticket');
            $table->foreignId('acheteur_id')->references('id')->on('users');
            $table->foreignId('vendeur_id')->references('id')->on('users');
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
        Schema::table('revente', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('revente', function(Blueprint $table){
            $table->dropForeign('revente_acheteur_id_foreign');
                 });
           
        Schema::table('revente', function(Blueprint $table){
            $table->dropForeign('revente_vendeur_id_foreign');
                });
                
        
        Schema::dropIfExists('revente');
    }
}
