<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
                'name'=> $this->faker->word(6),
                'slug'=> $this->faker->word(6),
                'short_desc'=> $this->faker->text(50),
                'desc'=> $this->faker->text(120),
                'sale_price'=>$this->faker->numberBetween(10, 20),
                'regular_price'=>$this->faker->numberBetween(10, 20),
                'SKU'=>$this->faker->numberBetween(10, 20),
                'stock_state'=> 'instock',
                'quantity'=>$this->faker->numberBetween(100, 200),
                'image'=> 'digital_' . $this->faker->unique()->numberBetween(1,22).'.jpg',
                'catigory_id'=>$this->faker->numberBetween(1, 6)
    
        ];
    }
}
