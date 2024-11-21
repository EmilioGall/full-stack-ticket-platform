<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ticket;
use App\Models\Operator;
use App\Models\Category;
use App\Models\User;
use Faker\Factory as Faker;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create();

        // Fetch all admin users, operators and categories to assign them randomly
        $operators = Operator::all();
        $categories = Category::all();
        $admins = User::all();

        // Create 50 tickets
        foreach (range(1, 50) as $index) {

            // Randomly pick an admin, an operator and a category
            $operator = $operators->random();
            $category = $categories->random();
            $admin = $admins->random();

            $newTicket = new Ticket();

            $newTicket->title = $faker->sentence(6, true);
            $newTicket->description = $faker->paragraph(3, true);
            $newTicket->status = $faker->randomElement(['Assigned', 'InProgress', 'Closed']);
            $newTicket->user_id = $admin->id;
            $newTicket->category_id = $category->id;
            $newTicket->operator_id = $operator->id;

            $newTicket->save();

        }
    }
}
