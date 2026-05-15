<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Exam;
use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    public function run(): void
    {
        $courses = Course::all();
        foreach ($courses as $course) {
            Exam::create([
                'course_id' => $course->id,
                'title' => $course->title . ' Final Exam',
                'questions_count' => rand(50, 100),
                'duration_minutes' => rand(60, 120),
                'difficulty' => rand(0, 1) ? 'Medium' : 'Hard',
            ]);
        }
    }
}
