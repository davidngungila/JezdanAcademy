<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\User;
use Illuminate\Database\Seeder;

class EnrollmentSeeder extends Seeder
{
    public function run(): void
    {
        $student = User::where('role', 'student')->first();
        $courses = Course::all();

        foreach ($courses as $course) {
            Enrollment::create([
                'user_id' => $student->id,
                'course_id' => $course->id,
                'progress' => rand(20, 100),
                'completed_at' => rand(0, 1) ? now() : null,
            ]);
        }
    }
}
