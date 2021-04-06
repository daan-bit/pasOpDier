<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Daniël",
            'email' => "s1119605@student.hsleiden.nl",
            'password' => bcrypt('laravel'),
            'foto_woonkamer' => '/img/profielFotos/foto_woonkamer_daan.jpg',
            'foto_keuken' => '/img/profielFotos/foto_keuken_daan.jpg',
            'foto_huis' => '/img/profielFotos/foto_huis_daan.jpg',
        ]);

        DB::table('users')->insert([
            'name' => "Cees",
            'email' => "c.vanderplas@gmail.com",
            'password' => bcrypt('laravel'),
            'foto_woonkamer' => '/img/profielFotos/foto_woonkamer_cees.jpg',
            'foto_keuken' => '/img/profielFotos/foto_keuken_cees.jpg',
            'foto_huis' => '/img/profielFotos/foto_huis_cees.jpg',
        ]);

        DB::table('users')->insert([
            'name' => "Jan",
            'email' => "hoemaakjeeenemailaan@gmail.com",
            'password' => bcrypt('laravel'),
            'foto_woonkamer' => '/img/profielFotos/default_foto_woonkamer.jpg',
            'foto_keuken' => '/img/profielFotos/default_foto_keuken.jpg',
            'foto_huis' => '/img/profielFotos/default_foto_huis.jpg',
        ]);

        DB::table('users')->insert([
            'name' => "Elsje",
            'email' => "elsje@gmail.com",
            'password' => bcrypt('laravel'),
            'foto_woonkamer' => '/img/profielFotos/default_foto_woonkamer.jpg',
            'foto_keuken' => '/img/profielFotos/default_foto_keuken.jpg',
            'foto_huis' => '/img/profielFotos/default_foto_huis.jpg',
        ]);

        DB::table('users')->insert([
            'name' => "Mees",
            'email' => "m.jurgens@casema.com",
            'password' => bcrypt('laravel'),
            'foto_woonkamer' => '/img/profielFotos/default_foto_woonkamer.jpg',
            'foto_keuken' => '/img/profielFotos/default_foto_keuken.jpg',
            'foto_huis' => '/img/profielFotos/default_foto_huis.jpg',
        ]);

    }
}
