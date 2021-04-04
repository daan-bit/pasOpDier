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
        $images_array = ['hond.jpg', 'overig.jpg', 'vis.jpg', 'vogel.jpg', 'kat.jpg'];
        foreach($images_array as $image){
            DB::table('images')->insert([
                'image' => '/img/' . $image
            ]);
        }
    }
}