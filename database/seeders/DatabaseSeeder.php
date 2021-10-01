<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Catigory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // // \App\Models\User::factory(10)->create();
        // Catigory::factory()->count(6)->create();
        // Product::factory()->count(22)->create();

        $this->call(RoleSeeder::class);
        $this->call(TaxSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(SaleSeeder::class);
        $this->call(CatigorySeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(HomeSliderSeeder::class);
    }
}
