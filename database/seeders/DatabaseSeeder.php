<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email'=> 'admin@admin.com',
            'type'=> 'admin',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'//password
           
        ]);

        $this->call(BrandSeeder::class);
        $this->call(TypeVehicleSeeder::class);
        $this->call(VehicleSeeder::class);
        $this->call(ClientSeeder::class);
    }
}
