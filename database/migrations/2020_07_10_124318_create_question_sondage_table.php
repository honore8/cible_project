<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionSondageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_sondage', function (Blueprint $table) {
            $table->id();
            $table->text('texte');
            $table->timestamps();
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
        Schema::table('question_sondage', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::dropIfExists('question_sondage');
    }
}
