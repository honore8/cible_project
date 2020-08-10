<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeSondageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_sondage', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
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
       
        Schema::table('type_sondage', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::dropIfExists('type_sondage');
    }
}
