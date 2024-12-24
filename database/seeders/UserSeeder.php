<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin', // Replace accordingly
            'email' => 'admin@gmail.com', // Replace with your desired email
            'password' => Hash::make('password123'), // Use Hash to encrypt the password
        ]);
    }
}