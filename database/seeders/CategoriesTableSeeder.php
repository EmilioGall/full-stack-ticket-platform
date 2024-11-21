<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 10 categories
        foreach (range(1, 10) as $index) {

            $newCategory = new Category();

            $newCategory->name = 'Category ' . $index;

            $newCategory->save();

        }
    }
}
