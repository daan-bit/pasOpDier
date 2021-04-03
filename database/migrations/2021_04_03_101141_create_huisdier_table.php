<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHuisdierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huisdier', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('soort')->default('Onbekend');
            $table->string('image')->default('/img/default_huisdier.jpg');
            $table->string('wanneer');
            $table->float('uurtarief');
            $table->integer('hoelang');
            $table->string('eigenaarEmail')->unique();
            $table->foreign("eigenaarEmail")->references("email")->on("users");
            $table->string('beschrijving');
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
            $table->dropForeign('users_eigenaarEmail_foreign');
        });
        Schema::dropIfExists('huisdier');
    }
}
