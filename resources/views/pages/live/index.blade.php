@extends('layouts.app')

@section('title', 'Live Sessions – Jezdan Digital Academy')
@section('page_title', 'Live Sessions')

@section('content')
<div class="section-header"><div><h2>Live Learning</h2><p>Join scheduled live classes and webinars</p></div></div>
<div class="grid-3 mb-24">
    @forelse($sessions->whereIn('status', ['Live', 'Upcoming']) as $live)
    <div class="live-card">
        <div class="live-header" style="{{ $live->status == 'Live' ? 'background:linear-gradient(135deg, #ef4444, #0b1f3a);' : '' }}">
            <div style="margin-bottom:6px">
                @if($live->status == 'Live')
                    <span class="live-dot"></span><span style="font-size:11px;font-weight:700;letter-spacing:1px">LIVE NOW</span>
                @else
                    <span class="badge badge-blue">UPCOMING</span>
                @endif
            </div>
            <h4 style="font-size:14px;margin-bottom:4px">{{ $live->title }}</h4>
            <p style="font-size:12px;opacity:.7"><i class="fa-solid fa-user"></i> {{ $live->instructor->name }}</p>
        </div>
        <div class="live-body">
            <p style="font-size:13px;color:var(--text-muted);margin-bottom:10px"><i class="fa-regular fa-clock" style="color:var(--accent)"></i> {{ $live->scheduled_at->format('D, M d · h:i A') }} EAT</p>
            <button class="btn {{ $live->status == 'Live' ? 'btn-primary' : 'btn-dark' }} btn-sm" style="width:100%" onclick="showToast('{{ $live->status == 'Live' ? 'Joining live session…' : 'Registering for session…' }}','fa-video')">
                <i class="fa-solid {{ $live->status == 'Live' ? 'fa-video' : 'fa-calendar-check' }}"></i> {{ $live->status == 'Live' ? 'Join Now' : 'Register' }}
            </button>
        </div>
    </div>
    @empty
    <p>No live sessions scheduled.</p>
    @endforelse
</div>

<div class="card">
    <div class="card-header"><span class="card-title">Session History</span></div>
    <div class="table-wrap">
        <table>
            <thead><tr><th>Session</th><th>Date</th><th>Instructor</th><th>Duration</th><th>Status</th></tr></thead>
            <tbody>
                @forelse($history as $h)
                <tr><td>{{ $h->title }}</td><td>{{ $h->scheduled_at->format('M d, Y') }}</td><td>{{ $h->instructor->name }}</td><td>{{ $h->duration_minutes }} min</td><td><span class="badge badge-green">Completed</span></td></tr>
                @empty
                <tr><td colspan="5" style="text-align:center">No session history found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
