<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostulerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postuler', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')
                    ->references('id')
                    ->on('users')
                    ;
            $table->foreignId('annonce_id')
                    ->references('id')
                    ->on('users')
                    ;
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
        Schema::table('postuler', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('postuler', function(Blueprint $table){
            $table->dropForeign('postuler_user_id_foreign');
                 });
        Schema::table('postuler', function(Blueprint $table){
                    $table->dropForeign('postuler_annonce_id_foreign');
                         });
        Schema::dropIfExists('postuler');
    }
}
