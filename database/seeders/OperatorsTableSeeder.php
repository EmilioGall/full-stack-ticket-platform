<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Operator;
use Faker\Factory as Faker;

class OperatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Create 5 operators
        foreach (range(1, 5) as $index) {

            $newOperator = new Operator();

            $newOperator->name = $faker->name;
            $newOperator->email = $faker->unique()->safeEmail;
            $newOperator->available = $faker->boolean(80); // 80% chance to be available

            $newOperator->save();

        }
    }
}
