<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $newAdmin = new User();

        $newAdmin->name = 'Admin1';
        $newAdmin->email = 'admin1@gmail.com';
        $newAdmin->password = Hash::make('12345678');

        $newAdmin->save();

    }
}

