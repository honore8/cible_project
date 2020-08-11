<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlertesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
        	Schema::create('alertes', function(Blueprint $table) {
                $table->increments('id');
                $table->text('email');
                $table->text('ville')->nullable();
                $table->text('pays')->nullable();
                $table->text('events')->nullable();
                $table->enum('type_event', array('gratuit', 'payant'))->nullable();
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
        Schema::table('alertes', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
       
        Schema::dropIfExists('alertes');
    }
}
