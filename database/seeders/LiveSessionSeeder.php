<?php

namespace Database\Seeders;

use App\Models\LiveSession;
use App\Models\User;
use Illuminate\Database\Seeder;

class LiveSessionSeeder extends Seeder
{
    public function run(): void
    {
        $instructor = User::where('role', 'instructor')->first();
        
        LiveSession::create([
            'instructor_id' => $instructor->id,
            'title' => 'Python Bootcamp – Day 4',
            'scheduled_at' => now(),
            'status' => 'Live',
        ]);

        LiveSession::create([
            'instructor_id' => $instructor->id,
            'title' => 'CompTIA Security+ Review',
            'scheduled_at' => now()->addDays(2),
            'status' => 'Upcoming',
        ]);
    }
}
