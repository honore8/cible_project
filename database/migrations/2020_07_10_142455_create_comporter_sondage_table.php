<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComporterSondageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comporter_sondage', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('type_sondage_id')
                    ->references('id')
                    ->on('type_sondage')
                ;
            $table->foreignId('question_sondage_id')
                    ->references('id')
                    ->on('question_sondage')
                    ;
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
        Schema::table('comporter_sondage', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
           
        Schema::table('comporter_sondage', function(Blueprint $table){
            $table->dropForeign('comporter_sondage_type_sondage_id_foreign');
                 });
           
        Schema::table('comporter_sondage', function(Blueprint $table){
            $table->dropForeign('commporter_sondage_question_sondage_id_foreign');
                 });
                
        Schema::dropIfExists('comporter_sondage');
    }
}
