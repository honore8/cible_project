<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchatTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achat_ticket', function (Blueprint $table) {
            $table->id();
            $table->foreignId('achat_id')->references('id')->on('achats');
            $table->foreignId('ticket_id')->references('id')->on('tickets');
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
        
        
		Schema::table('achat_ticket', function(Blueprint $table){
			$table->dropSoftDeletes();
                 });
		
        Schema::dropIfExists('achat_ticket');
        
    }
}
