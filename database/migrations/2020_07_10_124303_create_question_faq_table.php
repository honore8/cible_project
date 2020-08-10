<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionFaqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_faq', function (Blueprint $table) {
            $table->id();
            $table->string('texte');
            $table->longText('reponse');
            $table->timestamps();
            $table->foreignId('evenement_id') ->references('id')->on('evenement') ->onDelete('cascade');
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
        Schema::table('question_faq', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
           
        Schema::table('question_faq', function(Blueprint $table){
            $table->dropForeign('question_faq_evenement_id_foreign');
                 });
        
        Schema::dropIfExists('question_faq');
    }
}
