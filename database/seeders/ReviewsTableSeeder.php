<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'review' => "Het was er gezellig, gauw nog een keer",
            'user_id' => "1",
            'huisdier_id' => "1",
            'order_id' => "1",
        ]);
    }
}

