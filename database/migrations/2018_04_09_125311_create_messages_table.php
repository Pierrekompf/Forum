<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('texte');
            $table->integer('user_id');
            $table->integer('sous_categorie_id');
            $table->timestamps();
        });
        Schema::table('messages', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('sous_categorie_id')->references('id')->on('sous_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
