<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfertTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfert', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->decimal('montant',7,2);
            $table->timestamps();
            $table->foreignId('evenement_id') ->references('id') ->on('evenement')->onDelete('restrict');
            $table->foreignId('user_id') ->references('id')->on('users');
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
        Schema::table('transfert', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('transfert', function(Blueprint $table){
            $table->dropForeign('transfert_evenement_id_foreign');
                 });
        Schema::table('transfert', function(Blueprint $table){
            $table->dropForeign('transfert_user_id_foreign');
                });
        Schema::dropIfExists('transfert');
    }
}
