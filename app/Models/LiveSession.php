<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiveSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'instructor_id',
        'title',
        'scheduled_at',
        'duration_minutes',
        'meeting_link',
        'status',
    ];

    protected $casts = [
        'scheduled_at' => 'datetime',
    ];

    public function instructor()
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }
}
