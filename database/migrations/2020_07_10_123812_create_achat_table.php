<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achat', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('ticket_id')->references('id')->on('ticket');
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
           
        Schema::table('achat', function(Blueprint $table){
            $table->dropForeign('achat_ticket_id_foreign');
                 });
        
        
        Schema::table('achat', function(Blueprint $table){
             $table->dropForeign('achat_user_id_foreign');
                    });
                
        
        Schema::dropIfExists('achat');
    }
}
