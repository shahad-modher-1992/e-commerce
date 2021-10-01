<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('taxes')->insert([
           [
               'name'=>'tax1',
               'percentage'=> 2.4,
               'active'=> 1,
               'start_date'=> '2021-09-01',
               'end_date'=> '2021-09-20',
           ],
           [
               'name'=>'tax2',
               'percentage'=> 3.6,
               'active'=> 1,
               'start_date'=> '2021-08-01',
               'end_date'=> '2021-09-28',
           ]
        ]);
    }
}
