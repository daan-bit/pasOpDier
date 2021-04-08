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
        ]);

        DB::table('users')->insert([
            'name' => "Cees",
            'email' => "c.vanderplas@gmail.com",
            'password' => bcrypt('laravel'),
        ]);

        DB::table('users')->insert([
            'name' => "Jan",
            'email' => "hoemaakjeeenemailaan@gmail.com",
            'password' => bcrypt('laravel'),
        ]);

        DB::table('users')->insert([
            'name' => "Elsje",
            'email' => "elsje@gmail.com",
            'password' => bcrypt('laravel'),         
        ]);

        DB::table('users')->insert([
            'name' => "Mees",
            'email' => "m.jurgens@casema.com",
            'password' => bcrypt('laravel'),
        ]);

    }
}
