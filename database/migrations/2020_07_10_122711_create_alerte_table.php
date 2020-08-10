<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlerteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alerte', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['gratuit', 'payant','all']);
            $table->enum('frequence', ['jour', 'semaine','mois']);
            $table->timestamps();

            $table->foreignId('user_id')->references('id')->on('users');
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
        Schema::table('alerte', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('alerte', function(Blueprint $table){
            $table->dropForeign('alerte_user_id_foreign');
                 });
        Schema::dropIfExists('alerte');
    }
}
