<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'role',
        'avatar',
        'location',
        'bio',
        'website',
        'github',
        'twitter',
        'linkedin',
        'language',
        'dark_mode',
        'offline_mode',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'dark_mode' => 'boolean',
        'offline_mode' => 'boolean',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function enrolledCourses()
    {
        return $this->belongsToMany(Course::class, 'enrollments');
    }

    public function taughtCourses()
    {
        return $this->hasMany(Course::class, 'instructor_id');
    }

    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }
}
