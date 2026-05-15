<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@jezdan.co.tz',
            'password' => Hash::make('demo1234'),
            'role' => 'admin',
            'location' => 'Dar es Salaam, Tanzania',
        ]);

        // Instructor
        User::create([
            'name' => 'James Kimaro',
            'email' => 'james.k@jezdan.co.tz',
            'password' => Hash::make('demo1234'),
            'role' => 'instructor',
            'location' => 'Moshi, Kilimanjaro',
        ]);

        // Student
        User::create([
            'name' => 'John Doe',
            'email' => 'student@jezdan.co.tz',
            'password' => Hash::make('demo1234'),
            'role' => 'student',
            'location' => 'Dar es Salaam, Tanzania',
        ]);

        // Org Manager
        User::create([
            'name' => 'TechCorp Manager',
            'email' => 'manager@techcorp.co.tz',
            'password' => Hash::make('demo1234'),
            'role' => 'org_manager',
            'location' => 'Arusha, Tanzania',
        ]);
    }
}
