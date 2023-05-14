<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Customer;
use App\Models\User;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        
        $carNames = [

            "Audi",
            "BMW",
            "Chevrolet",
            "Chrysler",
            "Citroën",
            "Dacia",
            "Daewoo",
            "Daihatsu",
            "Dodge",
            "Ferrari",
            "Fiat",
            "Ford",
            "Honda",
            "Hyundai",
            "Jaguar",
            "Jeep",
            "Kia",
            "KTM",
            "Lada",
            "Lamborghini",
            "Land Rover",
            "Lotus",
            "Maserati",
            "Mazda",
            "McLaren",
            "Mercedes-Benz",
            "Mitsubishi",
            "Nissan",
            "Renault",
            "Rolls-Royce",
            "Rover",
            "Suzuki",
            "Toyota",
            "Volkswagen",
            "Volvo"
        ];

        foreach (range(1, 30) as $value) {
            DB::table('vehicles')->insert([
                "name" => $carNames[rand(0, count($carNames) - 1)],
                "plat_number" => rand(10000, 999999),
                "duration" => rand(1, 4),
                "packing_charge" => 1000,
                "status" => rand(0, 2),
                "registration_number" => rand(12, 34353) . time(),
                "category_id" => Category::inRandomOrder()->first()->id,
                "customer_id" => Customer::inRandomOrder()->first()->id,
                "created_by" => User::inRandomOrder()->first()->id,
                "created_at" => Carbon::today(),
                "updated_at" => Carbon::today()
            ]);
        }
    }
}
