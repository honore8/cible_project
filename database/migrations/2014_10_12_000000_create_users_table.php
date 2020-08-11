<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
          
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            $table->string('critere_pays')->nullable();
            $table->enum('type_event', array('gratuit', 'payant'))->nullable();
            $table->text('categorie_event')->nullable();
            $table->string('ville')->nullable();
            $table->string('pays')->nullable();
            $table->text('adresse')->nullable();
            $table->string('telephone')->nullable();
         
            });
  
    
        }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::dropIfExists('users');
        Schema::table('users', function(Blueprint $table){
            $table->dropForeign('user_lieux_id_foreign');
                 });
    }
}
