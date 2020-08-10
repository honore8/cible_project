<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message', function (Blueprint $table) {
            $table->id();
            $table->longText('texte');
            $table->boolean('lu');
            $table->timestamps();
            $table->foreignId('sender_id')->references('id')->on('users');
            $table->foreignId('receiver_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('message', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('message', function(Blueprint $table){
            $table->dropForeign('message_sender_id_foreign');
                 });
        Schema::table('message', function(Blueprint $table){
                    $table->dropForeign('message_receiver_id_foreign');
                         });
        Schema::dropIfExists('message');
    }
}
