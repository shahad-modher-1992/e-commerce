<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
           ['name'=> 'Nike', 'catigory_id' =>1] ,
           ['name'=> 'Amedcan Egale', 'catigory_id' =>1] ,
           ['name'=> 'IKKS', 'catigory_id' =>1] ,
           ['name'=> 'Apple', 'catigory_id' =>2] ,
           ['name'=> 'Sumsung' ,'catigory_id' =>2] ,
           ['name'=> 'Huawei', 'catigory_id' =>2] ,
           ['name'=> 'Loin', 'catigory_id' =>5] ,
           ['name'=> 'Lux', 'catigory_id' =>5] ,
           ['name'=> 'Addidas', 'catigory_id' =>3] ,
           ['name'=> 'Vans','catigory_id' =>3] ,
           ['name'=> 'DKNy','catigory_id' =>3] ,
           ['name'=> 'Dior','catigory_id' =>4] ,
           ['name'=> 'Paris', 'catigory_id' =>4] ,
           ['name'=> 'Note', 'catigory_id' =>4] ,
        ]);
    }
}
