<?php

namespace Database\Seeders;

use App\Models\TypeVehicle;
use Database\Factories\TypeVehicleFactory;
use Illuminate\Database\Seeder;

class TypeVehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeVehicle::factory(5)->create();
    }
}
