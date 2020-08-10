<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSondageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sondage', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->timestamps();
            $table->foreignId('evenement_id')->references('id')  ->on('evenement');
            $table->foreignId('type_sondage_id')->references('id')->on('type_sondage');
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
        Schema::table('sondage', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('sondage', function(Blueprint $table){
            $table->dropForeign('sondage_evenement_id_foreign');
                 });
    
         Schema::table('sondage', function(Blueprint $table){
                    $table->dropForeign('sondage_type_sondage_id_foreign');
                         });
        Schema::dropIfExists('sondage');
    }
}
