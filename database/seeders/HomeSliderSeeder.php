<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_sliders')->insert([
         [
             'title'          =>  'fashion',
             'subtitle'       => 'please buy from us',
             'price'          => '23.45',
             'link'           => 'shop now',
             'image'          => 'main-slider-1-2.jpg',
             'status'        => 1,
         ],
         [
             'title'          =>  'furniture',
             'subtitle'       => 'please buy from us',
             'price'          => '1000.45',
             'link'           => 'shop now',
             'image'          => 'main-slider-1-3.jpg',
             'status'        => 1,
         ],
        ]);
    }
}
