<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'identification_card' => $this->faker->numberBetween(1000000,20000000),
            'email' => $this->faker->unique()->safeEmail()
        ];
    }
}

