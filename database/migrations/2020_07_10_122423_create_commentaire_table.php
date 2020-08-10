<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaire', function (Blueprint $table) {
            $table->id();
            $table->integer('note');
            $table->text('texte');
            $table->timestamps();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::table('commentaire', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('commentaire', function(Blueprint $table){
            $table->dropForeign('commentaire_user_id_foreign');
                 });
                 
        Schema::dropIfExists('commentaire');
    }
}
