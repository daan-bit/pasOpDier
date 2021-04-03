<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class HuisdierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('huisdier')->insert([
            'naam' => "Max",
            'image' => "/img/hond.jpg",
            'soort' => 'hond',
            'wanneer' => "27 Septemeber",
            'hoelang' => "3",
            'uurtarief' => "10.00",
            'eigenaarEmail' => "s1119605@student.hsleiden.nl",
            'beschrijving' => "Max is een lieve hond met een goed karakter. Je zal geen last van hem hebben",
        ]);
    }
}
