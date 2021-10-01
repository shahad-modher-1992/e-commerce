<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatigorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catigories')->insert([
           ['name'=>'Fashion Clothings'],
           ['name'=>'Shop Smartphone & Tablets & Laptop'],
           ['name'=>'Shoes'],
           ['name'=>'Cosmitac'],
           ['name'=>'Furniture'],           
        ]);
    }
}
