<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $instructor = User::where('role', 'instructor')->first();
        $catIct = Category::where('slug', 'ict')->first();
        $catSec = Category::where('slug', 'security')->first();

        $courses = [
            [
                'title' => 'CompTIA Security+ (SY0-701)',
                'category_id' => $catSec->id,
                'icon' => '🔒',
                'bg_color' => '#0b1f3a',
                'price' => 49,
                'old_price' => 89,
                'modules_count' => 12,
                'lessons_count' => 87,
                'rating' => 4.8,
                'students_count' => 342,
                'status' => 'published',
            ],
            [
                'title' => 'Python Programming Bootcamp',
                'category_id' => $catIct->id,
                'icon' => '🐍',
                'bg_color' => '#1e3a5f',
                'is_free' => true,
                'price' => 0,
                'modules_count' => 8,
                'lessons_count' => 64,
                'rating' => 4.9,
                'students_count' => 891,
                'status' => 'published',
            ],
            [
                'title' => 'AWS Cloud Practitioner',
                'category_id' => $catIct->id,
                'icon' => '☁️',
                'bg_color' => '#1a5276',
                'price' => 59,
                'old_price' => 99,
                'modules_count' => 10,
                'lessons_count' => 73,
                'rating' => 4.8,
                'students_count' => 218,
                'status' => 'published',
            ],
        ];

        foreach ($courses as $course) {
            Course::create(array_merge($course, [
                'instructor_id' => $instructor->id,
                'slug' => Str::slug($course['title']),
            ]));
        }
    }
}
