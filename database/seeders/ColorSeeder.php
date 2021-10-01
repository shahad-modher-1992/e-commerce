<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            ['name'=>'red'],
            ['name'=>'yellow'],
            ['name'=>'blue'],
            ['name'=>'green'],
            ['name'=>'gray'],
            ['name'=>'pink'],
            ['name'=>'black'],
            ['name'=>'white'],
            ['name'=>'brown'],
            ['name'=>'orange'],
        ]);
    }
}
