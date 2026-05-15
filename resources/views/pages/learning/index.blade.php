@extends('layouts.app')

@section('title', 'My Learning – Jezdan Digital Academy')
@section('page_title', 'My Learning')

@section('content')
<div class="section-header"><div><h2>My Learning</h2><p>Track your enrolled courses and progress</p></div></div>
<div class="stats-grid mb-24">
    <div class="stat-card"><div class="stat-icon orange"><i class="fa-solid fa-book"></i></div><div class="stat-info"><h3>7</h3><p>Enrolled</p></div></div>
    <div class="stat-card"><div class="stat-icon green"><i class="fa-solid fa-check"></i></div><div class="stat-info"><h3>3</h3><p>Completed</p></div></div>
    <div class="stat-card"><div class="stat-icon blue"><i class="fa-solid fa-clock"></i></div><div class="stat-info"><h3>46h</h3><p>Time Spent</p></div></div>
    <div class="stat-card"><div class="stat-icon purple"><i class="fa-solid fa-star"></i></div><div class="stat-info"><h3>4.7</h3><p>Avg Rating Given</p></div></div>
</div>
<div class="card">
    <div class="card-header"><span class="card-title">In Progress Courses</span></div>
    <div class="card-body" id="learningList">
        <!-- Sample Item -->
        <div style="display:flex;align-items:center;gap:14px;padding:14px 0;border-bottom:1px solid var(--border)">
            <div style="width:46px;height:46px;background:#0b1f3a;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:22px;flex-shrink:0">🔒</div>
            <div style="flex:1">
                <div style="font-size:14px;font-weight:600;margin-bottom:4px">CompTIA Security+ (SY0-701)</div>
                <div class="progress-bar"><div class="progress-fill" style="width:82%"></div></div>
                <div style="font-size:12px;color:var(--text-muted);margin-top:4px">82% · 12 modules · 87 lessons</div>
            </div>
            <div style="text-align:right">
                <span class="badge badge-orange">In Progress</span>
                <div style="margin-top:6px"><button class="btn btn-sm btn-outline" onclick="showToast('Opening lesson…','fa-play')"><i class="fa-solid fa-play"></i> Continue</button></div>
            </div>
        </div>
        <!-- Completed Item -->
        <div style="display:flex;align-items:center;gap:14px;padding:14px 0;border-bottom:1px solid var(--border)">
            <div style="width:46px;height:46px;background:#2d1b69;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:22px;flex-shrink:0">🛡️</div>
            <div style="flex:1">
                <div style="font-size:14px;font-weight:600;margin-bottom:4px">Cybersecurity Fundamentals</div>
                <div class="progress-bar"><div class="progress-fill" style="width:100%"></div></div>
                <div style="font-size:12px;color:var(--text-muted);margin-top:4px">100% · 6 modules · 42 lessons</div>
            </div>
            <div style="text-align:right">
                <span class="badge badge-green"><i class="fa-solid fa-check"></i> Complete</span>
                <div style="margin-top:6px"><button class="btn btn-sm btn-outline" onclick="showToast('Reviewing course…','fa-play')"><i class="fa-solid fa-play"></i> Review</button></div>
            </div>
        </div>
    </div>
</div>
@endsection
