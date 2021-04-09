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
            'image' => "/img/huisdieren/hond.jpg",
            'image640' => "/img/huisdieren/hond640.webp",
            'image1280' => "/img/huisdieren/hond1280.webp",
            'image1920' => "/img/huisdieren/hond1920.webp",
            'soort' => 'hond',
            'wanneer' => "27 Septemeber",
            'hoelang' => "3",
            'uurtarief' => "10.00",
            'user_id' => "1",
            'beschrijving' => "Max is een lieve hond met een goed karakter. Je zal geen last van hem hebben",
        ]);

        DB::table('huisdier')->insert([
            'naam' => "Tessa",
            'image' => "/img/huisdieren/kat.jpg",
            'image640' => "/img/huisdieren/kat640.webp",
            'image1280' => "/img/huisdieren/kat1280.webp",
            'image1920' => "/img/huisdieren/kat1920.webp",
            'soort' => 'kat',
            'wanneer' => "3 februari",
            'hoelang' => "7",
            'uurtarief' => "15.00",
            'user_id' => "2",
            'beschrijving' => "Tessa is een lieve kat en bijt alleen soms",
        ]);

        DB::table('huisdier')->insert([
            'naam' => "Arie",
            'image' => "/img/huisdieren/vogel.jpg",
            'image640' => "/img/huisdieren/vogel640.webp",
            'image1280' => "/img/huisdieren/vogel1280.webp",
            'image1920' => "/img/huisdieren/vogel1920.webp",
            'soort' => 'vogel',
            'wanneer' => "26 februari",
            'hoelang' => "2",
            'uurtarief' => "12.00",
            'user_id' => "3",
            'beschrijving' => "Arie is een goede vogel. Fluit soms, maar verder zul je geen last hebben. En oja! hij kan het volkslied",
        ]);

        DB::table('huisdier')->insert([
            'naam' => "Jan-Pieter",
            'image' => "/img/huisdieren/vis.jpg",
            'image640' => "/img/huisdieren/vogel640.webp",
            'image1280' => "/img/huisdieren/vis1280.webp",
            'image1920' => "/img/huisdieren/vis1920.webp",
            'soort' => 'vis',
            'wanneer' => "3 maart",
            'hoelang' => "1",
            'uurtarief' => "7.00",
            'user_id' => "4",
            'beschrijving' => "Jan-Pieter blubt en blubt en verder doet hij eigenlijk niet veel",
        ]);

        DB::table('huisdier')->insert([
            'naam' => "Youri",
            'image' => "/img/huisdieren/overig.jpg",
            'image640' => "/img/huisdieren/overig640.webp",
            'image1280' => "/img/huisdieren/overig1280.webp",
            'image1920' => "/img/huisdieren/overig1920.webp",
            'soort' => 'overig',
            'wanneer' => "26 februari",
            'hoelang' => "8",
            'uurtarief' => "8.00",
            'user_id' => "5",
            'beschrijving' => "Youri is een konijn en snuft maar wat in het rond. Laat hem niet in je keuken kastje komen!!!",
        ]);
    }
}
