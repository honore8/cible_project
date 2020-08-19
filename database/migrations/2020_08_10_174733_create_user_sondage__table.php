<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSondageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_sondage', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sondage_id')->references('id')->on('sondages');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('reponse1');
            $table->string('reponse2');
            $table->string('reponse3');
            $table->string('reponse4');
            $table->string('reponse5');
            $table->date('date');
            $table->softDeletes();     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_sondage', function(Blueprint $table){
			$table->dropSoftDeletes();
                 });
        
        Schema::dropIfExists('user_sondage_');
    }
}
