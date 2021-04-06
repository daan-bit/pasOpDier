<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfielfotosOnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('foto_woonkamer')->default('/img/profielFotos/default_foto_woonkamer.jpg');
            $table->string('foto_keuken')->default('/img/profielFotos/default_foto_keuken.jpg');
            $table->string('foto_huis')->default('/img/profielFotos/default_foto_huis.jpg');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
