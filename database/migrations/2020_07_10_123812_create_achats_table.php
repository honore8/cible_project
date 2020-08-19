<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('achats', function(Blueprint $table) {
                $table->id();
                $table->datetime('date');
                $table->float('montant', 12,2);
                $table->string('mode_de_paiement');
                $table->foreignId('user_id')->references('id')->on('users');
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
        Schema::table('achat', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        
        
        Schema::table('achat', function(Blueprint $table){
             $table->dropForeign('achat_user_id_foreign');
                    });
                
        
        Schema::dropIfExists('achat');
    }
}
