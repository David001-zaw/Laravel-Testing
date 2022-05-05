<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(10),
            'price' => $this->faker->numberBetween($min = 10000, $max = 90000)
            // 'price' => rand(100, 900)
        ];
    }
}
