<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReventeTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revente_ticket', function (Blueprint $table) {
            $table->id();
            $table->foreignId('revente_id')->references('id')->on('reventes');
            $table->foreignId('ticket_id')->references('id')->on('tickets');
            $table->decimal('prix', 10,2);
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
        Schema::table('revente_ticket', function(Blueprint $table){
			$table->dropSoftDeletes();
                 });
        
        Schema::dropIfExists('revente_ticket');
    }
}
