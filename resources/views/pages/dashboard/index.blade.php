@extends('layouts.app')

@php
    $role = request('role', 'student');
@endphp

@section('title', ucfirst($role) . ' Dashboard – Jezdan Digital Academy')
@section('page_title', ucfirst(str_replace('_', ' ', $role)) . ' Dashboard')

@section('content')
<div class="section-header">
    <div>
        <h2>Welcome back, 
            @if($role == 'student') John! 👋
            @elseif($role == 'instructor') James! 👩‍🏫
            @elseif($role == 'admin') Admin! ⚙️
            @elseif($role == 'org_manager') TechCorp Manager! 🏢
            @endif
        </h2>
        <p>Here's what's happening with 
            @if($role == 'student') your learning 
            @elseif($role == 'instructor') your courses 
            @elseif($role == 'admin') the platform 
            @elseif($role == 'org_manager') your team 
            @endif
            today · <span id="todayDate"></span>
        </p>
    </div>
    @if($role == 'student')
        <button class="btn btn-primary" onclick="navigateTo('/courses?role={{ $role }}')"><i class="fa-solid fa-plus"></i> Enroll New Course</button>
    @elseif($role == 'instructor')
        <button class="btn btn-primary" onclick="navigateTo('/instructor?role={{ $role }}')"><i class="fa-solid fa-plus"></i> Create New Course</button>
    @elseif($role == 'admin')
        <button class="btn btn-primary" onclick="showToast('System report generating...','fa-file-pdf')"><i class="fa-solid fa-file-pdf"></i> System Report</button>
    @elseif($role == 'org_manager')
        <button class="btn btn-primary" onclick="navigateTo('/organizations?role={{ $role }}')"><i class="fa-solid fa-users"></i> Manage Team</button>
    @endif
</div>

<!-- STATS GRID -->
<div class="stats-grid mb-24">
    @if($role == 'student')
        <div class="stat-card"><div class="stat-icon orange"><i class="fa-solid fa-book-open"></i></div><div class="stat-info"><h3>7</h3><p>Enrolled Courses</p></div></div>
        <div class="stat-card"><div class="stat-icon green"><i class="fa-solid fa-circle-check"></i></div><div class="stat-info"><h3>3</h3><p>Completed Courses</p></div></div>
        <div class="stat-card"><div class="stat-icon blue"><i class="fa-solid fa-award"></i></div><div class="stat-info"><h3>5</h3><p>Certificates Earned</p></div></div>
        <div class="stat-card"><div class="stat-icon purple"><i class="fa-solid fa-fire"></i></div><div class="stat-info"><h3>7</h3><p>Day Streak 🔥</p></div></div>
    @elseif($role == 'instructor')
        <div class="stat-card"><div class="stat-icon orange"><i class="fa-solid fa-users"></i></div><div class="stat-info"><h3>312</h3><p>Total Students</p></div></div>
        <div class="stat-card"><div class="stat-icon green"><i class="fa-solid fa-dollar-sign"></i></div><div class="stat-info"><h3>$4,820</h3><p>Course Revenue</p></div></div>
        <div class="stat-card"><div class="stat-icon blue"><i class="fa-solid fa-book"></i></div><div class="stat-info"><h3>12</h3><p>Active Courses</p></div></div>
        <div class="stat-card"><div class="stat-icon purple"><i class="fa-solid fa-star"></i></div><div class="stat-info"><h3>4.8</h3><p>Avg Rating</p></div></div>
    @elseif($role == 'admin')
        <div class="stat-card"><div class="stat-icon orange"><i class="fa-solid fa-dollar-sign"></i></div><div class="stat-info"><h3>$45.2k</h3><p>Total Revenue</p></div></div>
        <div class="stat-card"><div class="stat-icon blue"><i class="fa-solid fa-users"></i></div><div class="stat-info"><h3>1,230</h3><p>Total Users</p></div></div>
        <div class="stat-card"><div class="stat-icon green"><i class="fa-solid fa-book"></i></div><div class="stat-info"><h3>47</h3><p>Total Courses</p></div></div>
        <div class="stat-card"><div class="stat-icon purple"><i class="fa-solid fa-server"></i></div><div class="stat-info"><h3>99.9%</h3><p>Server Uptime</p></div></div>
    @elseif($role == 'org_manager')
        <div class="stat-card"><div class="stat-icon orange"><i class="fa-solid fa-users"></i></div><div class="stat-info"><h3>45</h3><p>Team Members</p></div></div>
        <div class="stat-card"><div class="stat-icon blue"><i class="fa-solid fa-graduation-cap"></i></div><div class="stat-info"><h3>78%</h3><p>Completion Rate</p></div></div>
        <div class="stat-card"><div class="stat-icon green"><i class="fa-solid fa-chart-line"></i></div><div class="stat-info"><h3>$2,480</h3><p>Budget Spent</p></div></div>
        <div class="stat-card"><div class="stat-icon purple"><i class="fa-solid fa-award"></i></div><div class="stat-info"><h3>12</h3><p>Certifications</p></div></div>
    @endif
</div>

<div class="grid-2 mb-24">
    <div class="card">
        <div class="card-header">
            <span class="card-title">
                @if($role == 'student') Monthly Progress
                @elseif($role == 'instructor') Revenue Growth
                @elseif($role == 'admin') Platform Activity
                @elseif($role == 'org_manager') Team Engagement
                @endif
            </span>
        </div>
        <div class="card-body"><canvas id="mainChart" height="220"></canvas></div>
    </div>
    <div class="card">
        <div class="card-header">
            <span class="card-title">
                @if($role == 'student') Course Distribution
                @elseif($role == 'instructor') Student Enrollment
                @elseif($role == 'admin') Revenue by Category
                @elseif($role == 'org_manager') Skills Distribution
                @endif
            </span>
        </div>
        <div class="card-body"><canvas id="secondaryChart" height="220"></canvas></div>
    </div>
</div>

@if($role == 'student')
    <div class="card mb-24">
        <div class="card-header"><span class="card-title">Continue Learning</span></div>
        <div class="card-body">
            <div style="display:flex;align-items:center;gap:14px;padding:10px 0;border-bottom:1px solid var(--border)">
                <div style="width:40px;height:40px;background:var(--primary);color:#fff;border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:18px">🔒</div>
                <div style="flex:1"><strong>CompTIA Security+</strong><p style="font-size:12px;color:var(--text-muted)">82% Complete</p></div>
                <button class="btn btn-primary btn-sm">Resume</button>
            </div>
        </div>
    </div>
@elseif($role == 'instructor')
    <div class="card mb-24">
        <div class="card-header"><span class="card-title">Recent Student Submissions</span></div>
        <div class="table-wrap">
            <table>
                <thead><tr><th>Student</th><th>Course</th><th>Date</th><th>Action</th></tr></thead>
                <tbody>
                    <tr><td>Amina Moshi</td><td>Python Bootcamp</td><td>2h ago</td><td><button class="btn btn-outline btn-sm">Grade</button></td></tr>
                </tbody>
            </table>
        </div>
    </div>
@elseif($role == 'admin')
    <div class="card mb-24">
        <div class="card-header"><span class="card-title">Pending Course Approvals</span></div>
        <div class="card-body">
            <div style="display:flex;align-items:center;gap:14px;padding:10px 0;border-bottom:1px solid var(--border)">
                <div style="flex:1"><strong>Ethical Hacking Advanced</strong><p style="font-size:12px;color:var(--text-muted)">By James Kimaro</p></div>
                <button class="btn btn-primary btn-sm">Approve</button>
                <button class="btn btn-outline btn-sm">Review</button>
            </div>
        </div>
    </div>
@elseif($role == 'org_manager')
    <div class="card mb-24">
        <div class="card-header"><span class="card-title">Top Performing Employees</span></div>
        <div class="table-wrap">
            <table>
                <thead><tr><th>Name</th><th>Certifications</th><th>Score</th></tr></thead>
                <tbody>
                    <tr><td>Mohamed Juma</td><td>3</td><td>98%</td></tr>
                </tbody>
            </table>
        </div>
    </div>
@endif

@endsection

@push('scripts')
<script>
    function initCharts() {
        const role = "{{ $role }}";
        const ctx1 = document.getElementById('mainChart').getContext('2d');
        new Chart(ctx1, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                datasets: [{
                    label: role === 'instructor' ? 'Revenue ($)' : 'Activity',
                    data: role === 'admin' ? [400, 600, 800, 700, 1100] : [12, 19, 15, 25, 32],
                    borderColor: '#f58434',
                    tension: 0.4,
                    fill: true,
                    backgroundColor: 'rgba(245, 132, 52, 0.1)'
                }]
            },
            options: { responsive: true, plugins: { legend: { display: false } } }
        });

        const ctx2 = document.getElementById('secondaryChart').getContext('2d');
        new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ['Category A', 'Category B', 'Category C'],
                datasets: [{
                    data: [45, 25, 30],
                    backgroundColor: ['#22c55e', '#f58434', '#3b82f6']
                }]
            },
            options: { responsive: true, cutout: '70%', plugins: { legend: { position: 'bottom' } } }
        });
    }
    document.addEventListener('DOMContentLoaded', initCharts);
</script>
@endpush
