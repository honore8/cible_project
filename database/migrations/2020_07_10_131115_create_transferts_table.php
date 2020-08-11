<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transferts', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->decimal('montant',12,2);
            $table->timestamps();
            $table->foreignId('evenement_id') ->references('id') ->on('evenements')->onDelete('restrict');
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
        Schema::table('transferts', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('transferts', function(Blueprint $table){
            $table->dropForeign('transfert_evenement_id_foreign');
                 });
     
        Schema::dropIfExists('transferts');
    }
}
