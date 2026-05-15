@extends('layouts.app')

@section('title', 'My Learning – Jezdan Digital Academy')
@section('page_title', 'My Learning')

@section('content')
<div class="section-header"><div><h2>My Learning</h2><p>Track your enrolled courses and progress</p></div></div>
<div class="stats-grid mb-24">
    <div class="stat-card"><div class="stat-icon orange"><i class="fa-solid fa-book"></i></div><div class="stat-info"><h3>{{ $stats['enrolled'] }}</h3><p>Enrolled</p></div></div>
    <div class="stat-card"><div class="stat-icon green"><i class="fa-solid fa-check"></i></div><div class="stat-info"><h3>{{ $stats['completed'] }}</h3><p>Completed</p></div></div>
    <div class="stat-card"><div class="stat-icon blue"><i class="fa-solid fa-clock"></i></div><div class="stat-info"><h3>{{ $stats['time'] }}</h3><p>Time Spent</p></div></div>
    <div class="stat-card"><div class="stat-icon purple"><i class="fa-solid fa-star"></i></div><div class="stat-info"><h3>{{ $stats['rating'] }}</h3><p>Avg Rating Given</p></div></div>
</div>
<div class="card">
    <div class="card-header"><span class="card-title">My Courses</span></div>
    <div class="card-body" id="learningList">
        @forelse($enrollments as $enrollment)
        <div style="display:flex;align-items:center;gap:14px;padding:14px 0;border-bottom:1px solid var(--border)">
            <div style="width:46px;height:46px;background:{{ $enrollment->course->bg_color }};border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:22px;flex-shrink:0;color:white;">{{ $enrollment->course->icon }}</div>
            <div style="flex:1">
                <div style="font-size:14px;font-weight:600;margin-bottom:4px">{{ $enrollment->course->title }}</div>
                <div class="progress-bar"><div class="progress-fill" style="width:{{ $enrollment->progress }}%"></div></div>
                <div style="font-size:12px;color:var(--text-muted);margin-top:4px">{{ $enrollment->progress }}% · {{ $enrollment->course->modules_count }} modules · {{ $enrollment->course->lessons_count }} lessons</div>
            </div>
            <div style="text-align:right">
                <span class="badge {{ $enrollment->progress == 100 ? 'badge-green' : 'badge-orange' }}">
                    {{ $enrollment->progress == 100 ? 'Complete' : 'In Progress' }}
                </span>
                <div style="margin-top:6px">
                    <button class="btn btn-sm btn-outline" onclick="showToast('Opening lesson…','fa-play')">
                        <i class="fa-solid fa-play"></i> {{ $enrollment->progress == 100 ? 'Review' : 'Continue' }}
                    </button>
                </div>
            </div>
        </div>
        @empty
        <div style="text-align:center;padding:40px;color:var(--text-muted);">
            <i class="fa-solid fa-book-open" style="font-size:48px;margin-bottom:16px;opacity:0.3;"></i>
            <p>You haven't enrolled in any courses yet.</p>
            <a href="/courses" class="btn btn-primary btn-sm" style="margin-top:12px;">Browse Courses</a>
        </div>
        @endforelse
    </div>
</div>
@endsection
