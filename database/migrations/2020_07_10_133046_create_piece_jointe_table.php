<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePieceJointeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piece_jointe', function (Blueprint $table) {
            $table->id();
            $table->binary('piece');
            $table->timestamps();
            $table->foreignId('evenement_id')->references('id') ->on('evenement')->onDelete('cascade');
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
        Schema::table('piece_jointe', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('piece_jointe', function(Blueprint $table){
            $table->dropForeign('piece_jointe_evenement_id_foreign');
                 });

        Schema::dropIfExists('piece_jointe');
    }
}
