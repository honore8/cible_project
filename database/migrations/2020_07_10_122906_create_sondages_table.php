<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSondagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sondages', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->timestamps();
            $table->foreignId('evenement_id')->references('id') ->on('evenements');
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
        Schema::table('sondages', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    
        Schema::dropIfExists('sondages');
    }
}
