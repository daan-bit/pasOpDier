<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('images')->insert([
                'image' => '/img/huisdieren/hond.jpg'
            ]);

            DB::table('images')->insert([
                'image' => '/img/huisdieren/overig.jpg'
            ]);

            DB::table('images')->insert([
                'image' => '/img/huisdieren/vis.jpg'
            ]);

            DB::table('images')->insert([
                'image' => '/img/huisdieren/vogel.jpg'
            ]);

            DB::table('images')->insert([
                'image' => '/img/huisdieren/kat.jpg'
            ]);
    }
}