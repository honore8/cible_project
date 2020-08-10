<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objet', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->longtext('description');
            $table->enum('type', ['perdu', 'trouvé']);
            $table->binary('img')->nullable();
            $table->timestamps();

            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('evenement_id')->references('id')->on('evenement');
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

        Schema::table('objet', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('objet', function(Blueprint $table){
            $table->dropForeign('objet_user_id_foreign');
                 });
           
        Schema::table('objet', function(Blueprint $table){
            $table->dropForeign('objet_evenement_id_foreign');
                 });
        Schema::dropIfExists('objet');
    }
}
