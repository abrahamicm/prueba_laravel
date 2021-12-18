<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       
        $this->faker->addProvider(new \Faker\Provider\Fakecar($this->faker));
        $v = $this->faker->vehicleArray();
        return [
            'model_name' => $this->faker->vehicleModel(),
            'client_id' => $this->faker->numberBetween(1,7),
            'brand_id' => $this->faker->numberBetween(1,7),
            'type_vehicle_id' => $this->faker->numberBetween(1,5),
            'license_plate' =>   $this->faker->vehicleRegistration('[A-Z]{3} [0-9]{5}')
        ];
    }

  
}
