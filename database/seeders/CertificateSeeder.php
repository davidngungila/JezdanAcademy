<?php

namespace Database\Seeders;

use App\Models\Certificate;
use App\Models\Enrollment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CertificateSeeder extends Seeder
{
    public function run(): void
    {
        $enrollments = Enrollment::where('progress', 100)->get();

        foreach ($enrollments as $enr) {
            Certificate::create([
                'user_id' => $enr->user_id,
                'course_id' => $enr->course_id,
                'certificate_number' => 'JDA-' . now()->year . '-' . Str::random(5),
                'issued_at' => now(),
            ]);
        }
    }
}
