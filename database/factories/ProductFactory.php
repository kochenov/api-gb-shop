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
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->paragraph(),
            'price' =>  $this->faker->randomFloat(2, 10, 5555),
            'images' => $this->faker->imageUrl(640, 480, 'animals', true),
            'category_id' => $this->faker->numberBetween(1, 20)
        ];
    }
}
