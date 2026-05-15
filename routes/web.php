<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Guest Routes
Route::get('/', function () {
    return view('landing');
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Platform Routes (Protected)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/courses', [CourseController::class, 'index'])->name('courses');
    
    Route::get('/my-learning', function () { return view('pages.learning.index'); })->name('learning');
    Route::get('/exams', function () { return view('pages.exams.index'); })->name('exams');
    Route::get('/certificates', function () { return view('pages.certificates.index'); })->name('certificates');
    Route::get('/library', function () { return view('pages.library.index'); })->name('library');
    Route::get('/live-sessions', function () { return view('pages.live.index'); })->name('live');
    Route::get('/instructor', function () { return view('pages.instructor.index'); })->name('instructor');
    Route::get('/admin', function () { return view('pages.admin.index'); })->name('admin');
    Route::get('/organizations', function () { return view('pages.organizations.index'); })->name('organizations');
    Route::get('/analytics', function () { return view('pages.analytics.index'); })->name('analytics');
    Route::get('/messages', function () { return view('pages.messages.index'); })->name('messages');
    Route::get('/ai-tutor', function () { return view('pages.ai.index'); })->name('ai');
    Route::get('/leaderboard', function () { return view('pages.leaderboard.index'); })->name('leaderboard');
    Route::get('/achievements', function () { return view('pages.gamification.index'); })->name('achievements');
    Route::get('/payments', function () { return view('pages.payments.index'); })->name('payments');
    Route::get('/security', function () { return view('pages.security.index'); })->name('security');
    Route::get('/settings', function () { return view('pages.settings.index'); })->name('settings');
});
