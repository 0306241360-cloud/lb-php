<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // protected $model = Product::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'price'=> $this->faker->randomFloat(2,1,0),
            'quantity'=> $this->faker->randomDigit(),
        ];
    }
}
