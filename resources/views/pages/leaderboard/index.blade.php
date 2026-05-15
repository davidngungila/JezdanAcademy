@extends('layouts.app')

@section('title', 'Leaderboard – Jezdan Digital Academy')
@section('page_title', 'Leaderboard')

@section('content')
<div class="section-header"><div><h2>Leaderboard</h2><p>Top performers this month</p></div><span class="badge badge-orange">May 2026</span></div>
<div class="grid-2">
    <div class="card">
        <div class="card-header"><span class="card-title">🏆 Top 10 Students</span></div>
        <div class="card-body">
            <div class="leader-item">
                <div class="leader-rank rank-1">🥇</div>
                <div class="leader-info"><strong>Amina Rashidi</strong><span><i class="fa-solid fa-location-dot" style="color:var(--accent)"></i> Dar es Salaam</span></div>
                <div class="leader-pts">4,820 <span style="font-size:11px;color:var(--text-muted)">pts</span></div>
            </div>
            <div class="leader-item">
                <div class="leader-rank rank-2">🥈</div>
                <div class="leader-info"><strong>James Kilimanjaro</strong><span><i class="fa-solid fa-location-dot" style="color:var(--accent)"></i> Moshi, Kilimanjaro</span></div>
                <div class="leader-pts">4,310 <span style="font-size:11px;color:var(--text-muted)">pts</span></div>
            </div>
            <div class="leader-item">
                <div class="leader-rank rank-3">🥉</div>
                <div class="leader-info"><strong>Fatuma Hassan</strong><span><i class="fa-solid fa-location-dot" style="color:var(--accent)"></i> Zanzibar</span></div>
                <div class="leader-pts">3,990 <span style="font-size:11px;color:var(--text-muted)">pts</span></div>
            </div>
            <div class="leader-item" style="background:var(--accent-pale);border-radius:10px;padding:10px;margin:2px 0">
                <div class="leader-rank rank-other">8</div>
                <div class="leader-info"><strong>John Doe (You)</strong><span><i class="fa-solid fa-location-dot" style="color:var(--accent)"></i> Dar es Salaam</span></div>
                <div class="leader-pts">2,840 <span style="font-size:11px;color:var(--text-muted)">pts</span></div>
            </div>
        </div>
    </div>
    <div>
        <div class="card mb-20">
            <div class="card-header"><span class="card-title">Your Ranking</span></div>
            <div class="card-body" style="text-align:center;padding:28px">
                <div style="font-size:52px;margin-bottom:8px">🥉</div>
                <h2 style="font-size:32px;color:var(--accent);font-weight:800">#8</h2>
                <p style="color:var(--text-muted)">out of 1,230 students</p>
                <div style="margin-top:16px;padding:14px;background:var(--bg);border-radius:10px">
                    <div style="font-size:28px;font-weight:800;color:var(--text)">2,840 pts</div>
                    <p style="font-size:12px;color:var(--text-muted)">+180 this week</p>
                </div>
                <button class="btn btn-primary" style="margin-top:14px;width:100%" onclick="showToast('Score shared on social media! 🎉','fa-share')"><i class="fa-solid fa-share-nodes"></i> Share My Score</button>
            </div>
        </div>
    </div>
</div>
@endsection
