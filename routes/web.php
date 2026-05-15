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
    
    Route::get('/my-learning', [DashboardController::class, 'myLearning'])->name('learning');
    Route::get('/exams', [DashboardController::class, 'exams'])->name('exams');
    Route::get('/certificates', [DashboardController::class, 'certificates'])->name('certificates');
    Route::get('/library', [DashboardController::class, 'library'])->name('library');
    Route::get('/live-sessions', [DashboardController::class, 'liveSessions'])->name('live');
    
    Route::get('/settings', [DashboardController::class, 'settings'])->name('settings');
    Route::post('/settings', [DashboardController::class, 'updateSettings']);
    Route::post('/settings/password', [DashboardController::class, 'updatePassword'])->name('settings.password');
    Route::post('/settings/delete', [DashboardController::class, 'deleteAccount'])->name('settings.delete');

    // Admin Management CRUDs
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::post('/admin/users', [UserController::class, 'store'])->name('admin.users.store');
    Route::put('/admin/users/{user}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');
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
});
