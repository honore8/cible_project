<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->decimal('prix',12,2);
            $table->string('type');
            $table->integer('nbpersonnes');
            $table->longText('description');
            $table->integer('limite');
            $table->integer('epuise');
            $table->timestamps();
            $table->foreignId('evenement_id')->references('id')->on('evenements') ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::table('tickets', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('tickets', function(Blueprint $table){
            $table->dropForeign('ticket_evenement_id_foreign');
                 });
        Schema::table('tickets', function(Blueprint $table){
             $table->dropForeign('ticket_achat_id_foreign');
                         });
        Schema::dropIfExists('tickets');
    }
}
