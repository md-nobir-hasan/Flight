<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'sku' => "jfEK".rand(0,999999),
            'price' => rand(5000,99999),
            'discount' => rand(500,5000),
            'view' => rand(0,20),
            'short_des' => fake()->paragraph(),
            'des' => fake()->paragraph(),
            'category_id'=> rand(1,9),
            'subcategory_id'=> rand(1,9),
            'img' => "/product/p-".rand(1,7).".png"
        ];
    }
}
