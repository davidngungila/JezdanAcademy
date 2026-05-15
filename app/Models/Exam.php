<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'title',
        'questions_count',
        'duration_minutes',
        'difficulty',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
