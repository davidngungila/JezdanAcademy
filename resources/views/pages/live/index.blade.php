@extends('layouts.app')

@section('title', 'Live Sessions – Jezdan Digital Academy')
@section('page_title', 'Live Sessions')

@section('content')
<div class="section-header"><div><h2>Live Learning</h2><p>Join scheduled live classes and webinars</p></div></div>
<div class="grid-3 mb-24">
    <!-- Live Session 1 -->
    <div class="live-card">
        <div class="live-header">
            <div style="margin-bottom:6px"><span class="live-dot"></span><span style="font-size:11px;font-weight:700;letter-spacing:1px">LIVE NOW</span></div>
            <h4 style="font-size:14px;margin-bottom:4px">Python Bootcamp – Day 4</h4>
            <p style="font-size:12px;opacity:.7"><i class="fa-solid fa-user"></i> James Kimaro</p>
        </div>
        <div class="live-body">
            <p style="font-size:13px;color:var(--text-muted);margin-bottom:10px"><i class="fa-regular fa-clock" style="color:var(--accent)"></i> TODAY · 2:00 PM EAT</p>
            <p style="font-size:12px;color:var(--text-muted);margin-bottom:12px"><i class="fa-solid fa-users" style="color:var(--info)"></i> 38 registered</p>
            <button class="btn btn-primary btn-sm" style="width:100%" onclick="showToast('Joining live session…','fa-video')">
                <i class="fa-solid fa-video"></i> Join Now
            </button>
        </div>
    </div>
    <!-- Upcoming Session -->
    <div class="live-card">
        <div class="live-header">
            <h4 style="font-size:14px;margin-bottom:4px">CompTIA Security+ Review</h4>
            <p style="font-size:12px;opacity:.7"><i class="fa-solid fa-user"></i> Dr. Fatuma Ally</p>
        </div>
        <div class="live-body">
            <p style="font-size:13px;color:var(--text-muted);margin-bottom:10px"><i class="fa-regular fa-clock" style="color:var(--accent)"></i> Sat, May 17 · 10:00 AM EAT</p>
            <p style="font-size:12px;color:var(--text-muted);margin-bottom:12px"><i class="fa-solid fa-users" style="color:var(--info)"></i> 24 registered</p>
            <button class="btn btn-dark btn-sm" style="width:100%" onclick="showToast('Registering for session…','fa-calendar-check')">
                <i class="fa-solid fa-calendar-plus"></i> Register
            </button>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header"><span class="card-title">Attendance Record</span></div>
    <div class="table-wrap">
        <table>
            <thead><tr><th>Session</th><th>Date</th><th>Instructor</th><th>Duration</th><th>Status</th></tr></thead>
            <tbody>
                <tr><td>CompTIA Security+ Review</td><td>May 8, 2026</td><td>Dr. Fatuma Ally</td><td>90 min</td><td><span class="badge badge-green">Attended</span></td></tr>
                <tr><td>Python Bootcamp Day 3</td><td>May 5, 2026</td><td>James Kimaro</td><td>120 min</td><td><span class="badge badge-green">Attended</span></td></tr>
                <tr><td>Network Fundamentals</td><td>Apr 29, 2026</td><td>Dr. Hassan Mwamba</td><td>60 min</td><td><span class="badge badge-red">Missed</span></td></tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
