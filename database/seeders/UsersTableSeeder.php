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
    }
}
