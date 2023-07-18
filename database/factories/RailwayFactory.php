<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Railway>
 */
class RailwayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company' => fake()->company(),
            'start_station' => fake()->city(),
            'end_station' => fake()->city(),
            'departure_time' => fake()->dateTimeBetween(),
            'arrival_time' => fake()->dateTimeBetween(),
            'train_code' => fake()->unique()->numerify(),
            'carriage_number' => fake()->numberBetween(),
            'on_time' => fake()->boolean(),
            'deleted' => fake()->boolean()
        ];
    }
}
