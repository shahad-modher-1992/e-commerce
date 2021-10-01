<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'            =>'p1',
                'size'            =>'XL',
                'Dimensions'      =>'30 x 40 x 10',
                'weight'          => '10',
                'short_desc'      => 'hi please buy from us',
                'desc'            => 'hello everyone can you buy from us please',
                'regular_price'   => '30.57',
                'sale_price'      => '20.45',
                'featured'        => 1,
                'quantity'        => 2,
                'image'           => 'digital_02.jpg',
                'catigory_id'     => 2,
                'color_id'        => 1,
                'brand_id'        => 5
            ],
            [
                'name'            =>'p2',
                'size'            =>'M',
                'Dimensions'      =>'20 x 30 x 10',
                'weight'          => '50',
                'short_desc'      => 'hi please buy from us',
                'desc'            => 'hello everyone can you buy from us please',
                'regular_price'   => '100.57',
                'sale_price'      => '10.45',
                'featured'        => 1,
                'quantity'        => 6,
                'image'           => 'digital_03.jpg',
                'catigory_id'     => 2,
                'color_id'        => 4,
                'brand_id'        => 4
            ],
            [
                'name'            =>'p3',
                'size'            =>'L',
                'Dimensions'      =>'50 x 40 x 10',
                'weight'          => '70',
                'short_desc'      => 'hi please buy from us',
                'desc'            => 'hello everyone can you buy from us please',
                'regular_price'   => '76.57',
                'sale_price'      => '60.45',
                'featured'        => 1,
                'quantity'        => 6,
                'image'           => 'fashion_09.jpg',
                'catigory_id'     => 1,
                'color_id'        => 4,
                'brand_id'        => 1
            ],
            [
                'name'            =>'p4',
                'size'            =>'S',
                'Dimensions'      =>'20 x 40 x 10',
                'weight'          => '10',
                'short_desc'      => 'hi please buy from us',
                'desc'            => 'hello everyone can you buy from us please',
                'regular_price'   => '23.57',
                'sale_price'      => '18.45',
                'featured'        => 1,
                'quantity'        => 8,
                'image'           => 'fashion_05.jpg',
                'catigory_id'     => 3,
                'color_id'        => 4,
                'brand_id'        => 9
            ],
            [
                'name'            =>'p5',
                'size'            =>'XL',
                'Dimensions'      =>'30 x 40 x 10',
                'weight'          => '10',
                'short_desc'      => 'hi please buy from us',
                'desc'            => 'hello everyone can you buy from us please',
                'regular_price'   => '22.57',
                'sale_price'      => '20.45',
                'featured'        => 1,
                'quantity'        => 2,
                'image'           => 'furniture_05.jpg',
                'catigory_id'     => 5,
                'color_id'        => 1,
                'brand_id'        => 8
            ],
            [
                'name'            =>'p6',
                'size'            =>'',
                'Dimensions'      =>'30 x 20 x 10',
                'weight'          => '20',
                'short_desc'      => 'hi please buy from us',
                'desc'            => 'hello everyone can you buy from us please',
                'regular_price'   => '10.57',
                'sale_price'      => '16.45',
                'featured'        => 1,
                'quantity'        => 4,
                'image'           => 'furniture_06.jpg',
                'catigory_id'     => 5,
                'color_id'        => 7,
                'brand_id'        => 8
            ],
            [
                'name'            =>'p7',
                'size'            =>'XL',
                'Dimensions'      =>'30 x 40 x 10',
                'weight'          => '10',
                'short_desc'      => 'hi please buy from us',
                'desc'            => 'hello everyone can you buy from us please',
                'regular_price'   => '30.57',
                'sale_price'      => '20.45',
                'featured'        => 1,
                'quantity'        => 2,
                'image'           => 'fashion_01.jpg',
                'catigory_id'     => 1,
                'color_id'        => 3,
                'brand_id'        => 1
            ],
            [
                'name'            =>'p8',
                'size'            =>'XL',
                'Dimensions'      =>'30 x 40 x 10',
                'weight'          => '10',
                'short_desc'      => 'hi please buy from us',
                'desc'            => 'hello everyone can you buy from us please',
                'regular_price'   => '53.57',
                'sale_price'      => '45.45',
                'featured'        => 1,
                'quantity'        => 10,
                'image'           => 'furniture_02.jpg',
                'catigory_id'     => 5,
                'color_id'        => 4,
                'brand_id'        => 7
            ],
            [
                'name'            =>'p9',
                'size'            =>'XL',
                'Dimensions'      =>'30 x 40 x 10',
                'weight'          => '10',
                'short_desc'      => 'hi please buy from us',
                'desc'            => 'hello everyone can you buy from us please',
                'regular_price'   => '30.57',
                'sale_price'      => '20.45',
                'featured'        => 1,
                'quantity'        => 2,
                'image'           => 'digital_06.jpg',
                'catigory_id'     => 2,
                'color_id'        => 5,
                'brand_id'        => 6
            ],
            [
                'name'            =>'p9',
                'size'            =>'M',
                'Dimensions'      =>'20 x 30 x 10',
                'weight'          => '50',
                'short_desc'      => 'hi please buy from us',
                'desc'            => 'hello everyone can you buy from us please',
                'regular_price'   => '10.57',
                'sale_price'      => '10.45',
                'featured'        => 1,
                'quantity'        => 6,
                'image'           => 'digital_03.jpg',
                'catigory_id'     => 2,
                'color_id'        => 7,
                'brand_id'        => 5
            ],
            [
                'name'            =>'p10',
                'size'            =>'L',
                'Dimensions'      =>'50 x 40 x 10',
                'weight'          => '70',
                'short_desc'      => 'hi please buy from us',
                'desc'            => 'hello everyone can you buy from us please',
                'regular_price'   => '76.57',
                'sale_price'      => '60.45',
                'featured'        => 1,
                'quantity'        => 6,
                'image'           => 'fashion_01.jpg',
                'catigory_id'     => 1,
                'color_id'        => 6,
                'brand_id'        => 2
            ],
            [
                'name'            =>'p11',
                'size'            =>'S',
                'Dimensions'      =>'20 x 40 x 10',
                'weight'          => '10',
                'short_desc'      => 'hi please buy from us',
                'desc'            => 'hello everyone can you buy from us please',
                'regular_price'   => '28.57',
                'sale_price'      => '18.45',
                'featured'        => 0,
                'quantity'        => 8,
                'image'           => 'fashion_02.jpg',
                'catigory_id'     => 3,
                'color_id'        => 1,
                'brand_id'        => 9
            ],
            [
                'name'            =>'p12',
                'size'            =>'XL',
                'Dimensions'      =>'30 x 40 x 10',
                'weight'          => '10',
                'short_desc'      => 'hi please buy from us',
                'desc'            => 'hello everyone can you buy from us please',
                'regular_price'   => '22.57',
                'sale_price'      => '20.45',
                'featured'        => 1,
                'quantity'        => 2,
                'image'           => 'furniture_06.jpg',
                'catigory_id'     => 5,
                'color_id'        => 2,
                'brand_id'        => 8
            ],
            [
                'name'            =>'p13',
                'size'            =>'',
                'Dimensions'      =>'30 x 20 x 10',
                'weight'          => '20',
                'short_desc'      => 'hi please buy from us',
                'desc'            => 'hello everyone can you buy from us please',
                'regular_price'   => '10.57',
                'sale_price'      => '16.45',
                'featured'        => 1,
                'quantity'        => 4,
                'image'           => 'furniture_08.jpg',
                'catigory_id'     => 5,
                'color_id'        => 5,
                'brand_id'        => 8
            ],
            [
                'name'            =>'p14',
                'size'            =>'XL',
                'Dimensions'      =>'30 x 40 x 10',
                'weight'          => '10',
                'short_desc'      => 'hi please buy from us',
                'desc'            => 'hello everyone can you buy from us please',
                'regular_price'   => '30.57',
                'sale_price'      => '20.45',
                'featured'        => 0,
                'quantity'        => 2,
                'image'           => 'fashion_06.jpg',
                'catigory_id'     => 1,
                'color_id'        => 3,
                'brand_id'        => 2
            ],
            [
                'name'            =>'p15',
                'size'            =>'XL',
                'Dimensions'      =>'30 x 40 x 10',
                'weight'          => '10',
                'short_desc'      => 'hi please buy from us',
                'desc'            => 'hello everyone can you buy from us please',
                'regular_price'   => '53.57',
                'sale_price'      => '45.45',
                'featured'        => 0,
                'quantity'        => 4,
                'image'           => 'furniture_09.jpg',
                'catigory_id'     => 5,
                'color_id'        => 7,
                'brand_id'        => 7
            ],
            [
                'name'            =>'p16',
                'size'            =>'XL',
                'Dimensions'      =>'30 x 40 x 10',
                'weight'          => '10',
                'short_desc'      => 'hi please buy from us',
                'desc'            => 'hello everyone can you buy from us please',
                'regular_price'   => '30.57',
                'sale_price'      => '20.45',
                'featured'        => 1,
                'quantity'        => 2,
                'image'           => 'digital_16.jpg',
                'catigory_id'     => 2,
                'color_id'        => 5,
                'brand_id'        => 5
            ],
            [
                'name'            =>'p17',
                'size'            =>'M',
                'Dimensions'      =>'20 x 30 x 10',
                'weight'          => '50',
                'short_desc'      => 'hi please buy from us',
                'desc'            => 'hello everyone can you buy from us please',
                'regular_price'   => '100.57',
                'sale_price'      => '10.45',
                'featured'        => 1,
                'quantity'        => 6,
                'image'           => 'digital_20.jpg',
                'catigory_id'     => 2,
                'color_id'        => 6,
                'brand_id'        => 5
            ],
            [
                'name'            =>'p18',
                'size'            =>'L',
                'Dimensions'      =>'50 x 40 x 10',
                'weight'          => '70',
                'short_desc'      => 'hi please buy from us',
                'desc'            => 'hello everyone can you buy from us please',
                'regular_price'   => '76.57',
                'sale_price'      => '60.45',
                'featured'        => 1,
                'quantity'        => 6,
                'image'           => 'fashion_10.jpg',
                'catigory_id'     => 5,
                'color_id'        => 2,
                'brand_id'        => 6
            ],
            [
                'name'            =>'p19',
                'size'            =>'S',
                'Dimensions'      =>'20 x 40 x 10',
                'weight'          => '10',
                'short_desc'      => 'hi please buy from us',
                'desc'            => 'hello everyone can you buy from us please',
                'regular_price'   => '23.57',
                'sale_price'      => '18.45',
                'featured'        => 1,
                'quantity'        => 8,
                'image'           => 'fashion_04.jpg',
                'catigory_id'     => 1,
                'color_id'        => 10,
                'brand_id'        => 2
            ],
            [
                'name'            =>'p20',
                'size'            =>'XL',
                'Dimensions'      =>'30 x 40 x 10',
                'weight'          => '10',
                'short_desc'      => 'hi please buy from us',
                'desc'            => 'hello everyone can you buy from us please',
                'regular_price'   => '22.57',
                'sale_price'      => '20.45',
                'featured'        => 1,
                'quantity'        => 2,
                'image'           => 'furniture_03.jpg',
                'catigory_id'     => 5,
                'color_id'        => 8,
                'brand_id'        => 8
            ],
            [
                'name'            =>'p22',
                'size'            =>'',
                'Dimensions'      =>'30 x 20 x 10',
                'weight'          => '20',
                'short_desc'      => 'hi please buy from us',
                'desc'            => 'hello everyone can you buy from us please',
                'regular_price'   => '10.57',
                'sale_price'      => '16.45',
                'featured'        => 1,
                'quantity'        => 4,
                'image'           => 'furniture_01.jpg',
                'catigory_id'     => 5,
                'color_id'        => 7,
                'brand_id'        => 8
            ],
            [
                'name'            =>'p23',
                'size'            =>'XL',
                'Dimensions'      =>'30 x 40 x 10',
                'weight'          => '10',
                'short_desc'      => 'hi please buy from us',
                'desc'            => 'hello everyone can you buy from us please',
                'regular_price'   => '30.57',
                'sale_price'      => '20.45',
                'featured'        => 1,
                'quantity'        => 2,
                'image'           => 'fashion_08.jpg',
                'catigory_id'     => 1,
                'color_id'        => 6,
                'brand_id'        => 2
            ],
            [
                'name'            =>'p24',
                'size'            =>'XL',
                'Dimensions'      =>'30 x 40 x 10',
                'weight'          => '10',
                'short_desc'      => 'hi please buy from us',
                'desc'            => 'hello everyone can you buy from us please',
                'regular_price'   => '53.57',
                'sale_price'      => '45.45',
                'featured'        => 1,
                'quantity'        => 10,
                'image'           => 'furniture_08.jpg',
                'catigory_id'     => 5,
                'color_id'        => 6,
                'brand_id'        => 7
            ],
        ]);
    }
}
