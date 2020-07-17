<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiltresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filtres', function (Blueprint $table) {
            $table->id();
            $table->string('valeur');
            $table->string('type');
            $table->timestamps();

            $table->foreignId('alerte_id')->references('id')->on('alerte');
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
        Schema::dropIfExists('filtres');
        Schema::table('filtres', function(Blueprint $table){
            $table->dropForeign('filtres_alerte_id_foreign');
                 });
    }
}
