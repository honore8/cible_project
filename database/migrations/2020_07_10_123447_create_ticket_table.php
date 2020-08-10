<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket', function (Blueprint $table) {
            $table->id();
            $table->decimal('prix',5,2);
            $table->string('type');
            $table->integer('nbpersonnes');
            $table->longText('description');
            $table->integer('limite');
            $table->integer('epuise');
            $table->binary('image');
            $table->timestamps();
            $table->foreignId('evenement_id')->references('id')->on('evenement') ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::table('ticket', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('ticket', function(Blueprint $table){
            $table->dropForeign('ticket_evenement_id_foreign');
                 });
        Schema::table('ticket', function(Blueprint $table){
             $table->dropForeign('ticket_achat_id_foreign');
                         });
         Schema::table('ticket', function(Blueprint $table){
              $table->dropForeign('ticket_revente_id_foreign');
             });
        Schema::dropIfExists('ticket');
    }
}
