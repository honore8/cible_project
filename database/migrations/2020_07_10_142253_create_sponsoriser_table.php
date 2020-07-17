<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsoriserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsoriser', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('evenement_id')->references('id') ->on('users');
        });
     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('postuler', function(Blueprint $table){
            $table->dropForeign('sponsoriser_user_id_foreign');
                 });
        Schema::table('postuler', function(Blueprint $table){
                    $table->dropForeign('sponsoriser_evenement _id_foreign');
                         });
        Schema::dropIfExists('sponsoriser');
    }
}
