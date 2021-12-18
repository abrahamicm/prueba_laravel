<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $brand_name=['toyoya','audi','ford','zotye','kia','fiat','honda'];
        return [
            'name'=>$this->faker->unique->randomElement($brand_name)
        ];
    }
}
