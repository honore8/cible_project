<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLieuxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lieux', function (Blueprint $table) {
            $table->id();
            $table->string('pays');
            $table->timestamps();
            $table->foreignId('user_id')->references('id') ->on('users');
            $table->string('countrycode',3)->references('countrycode') ->on('countrys');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('lieux', function(Blueprint $table){
            $table->dropForeign('lieux_user_id_foreign');
                 });
        
        Schema::table('lieux', function(Blueprint $table){
            $table->dropForeign('lieux_countrys_id_foreign');
          });
                 
        Schema::dropIfExists('lieux');
    }
}
