<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoberAnnonceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jober_annonce', function (Blueprint $table) {
            $table->id();
            $table->foreignId('annonce_id')->references('id')->on('annonces');
            $table->foreignId('jober_id')->references('id')->on('jobers');
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
        Schema::table('jober_annonce', function(Blueprint $table){
			$table->dropSoftDeletes();
                 });
        
        Schema::dropIfExists('jober_annonce');
    }
}
