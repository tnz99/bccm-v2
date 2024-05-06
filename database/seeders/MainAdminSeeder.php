<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class MainAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Main Admin',
            'email' => 'sujata@gmail.com',
            'password' => bcrypt('12345678'), // You should use Hash::make() for new versions of Laravel
            'role_as' => 1,
        ]);
    }
}

