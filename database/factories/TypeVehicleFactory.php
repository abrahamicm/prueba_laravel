<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TypeVehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $vehicle_types=['Hatchback','Sedan','SUV','Comercial','Pickup'];
        return [
            'name'=>$this->faker->unique->randomElement($vehicle_types)
        ];
    }
}
