<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([
            ['sale_date'=> '2021-09-01', 'status'=>1],
            ['sale_date'=> '2021-09-02', 'status'=>1],
        ]);
    }
}
