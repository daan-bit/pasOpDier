<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProfielenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profielen')->insert([
            'user_id' => '1',
            'foto_woonkamer' => '/img/profielFotos/foto_woonkamer_daan.jpg',
            'foto_keuken' => '/img/profielFotos/foto_keuken_daan.jpg',
            'foto_huis' => '/img/profielFotos/foto_huis_daan.jpg',
        ]);

        DB::table('profielen')->insert([
            'user_id' => '2',
            'foto_woonkamer' => '/img/profielFotos/default_foto_woonkamer.jpg',
            'foto_keuken' => '/img/profielFotos/default_foto_keuken.jpg',
            'foto_huis' => '/img/profielFotos/default_foto_huis.jpg',
        ]);

        DB::table('profielen')->insert([
            'user_id' => '3',
            'foto_woonkamer' => '/img/profielFotos/foto_woonkamer_daan.jpg',
            'foto_keuken' => '/img/profielFotos/foto_keuken_daan.jpg',
            'foto_huis' => '/img/profielFotos/foto_huis_daan.jpg',
        ]);

        DB::table('profielen')->insert([
            'user_id' => '4',
            'foto_woonkamer' => '/img/profielFotos/default_foto_woonkamer.jpg',
            'foto_keuken' => '/img/profielFotos/default_foto_keuken.jpg',
            'foto_huis' => '/img/profielFotos/default_foto_huis.jpg',
        ]);

        DB::table('profielen')->insert([
            'user_id' => '5',
            'foto_woonkamer' => '/img/profielFotos/foto_woonkamer_daan.jpg',
            'foto_keuken' => '/img/profielFotos/foto_keuken_daan.jpg',
            'foto_huis' => '/img/profielFotos/foto_huis_daan.jpg',
        ]);
    }
}



