<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReponseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reponse', function (Blueprint $table) {
            $table->id();
            $table->integer('echelle');
            $table->timestamps();
            $table->foreignId('question_sondage_id')->references('id')->on('question_sondage')->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('reponse', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('reponse', function(Blueprint $table){
            $table->dropForeign('reponse_question_sondage_id_foreign');
                 });
        Schema::table('reponse', function(Blueprint $table){
            $table->dropForeign('reponse_user_id_foreign');
                });
        Schema::dropIfExists('reponse');
    }
}
