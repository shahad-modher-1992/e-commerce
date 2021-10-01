<?php

namespace Database\Factories;

use App\Models\Catigory;
use Illuminate\Database\Eloquent\Factories\Factory;

class CatigoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Catigory::class;

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
        ];
    }
}
