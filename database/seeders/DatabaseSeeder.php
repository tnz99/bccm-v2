<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::create([
            'name' => 'Main Admin',
            'email' => 'sujata@gmail.com',
            'password' => bcrypt('12345678'), // You should use Hash::make() for new versions of Laravel
            'role_as' => 1,
        ]);
    }
}
