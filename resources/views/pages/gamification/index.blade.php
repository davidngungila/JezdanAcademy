@extends('layouts.app')

@section('title', 'Badges & Achievements – Jezdan Digital Academy')
@section('page_title', 'Badges & Achievements')

@section('content')
<div class="section-header"><div><h2>Badges & Achievements</h2><p>Earn rewards for learning milestones</p></div></div>
<div class="card mb-24">
    <div class="card-header"><span class="card-title">Earned Badges</span><span class="badge badge-orange">8 / 24 earned</span></div>
    <div class="card-body">
        <div class="badge-grid">
            <div class="game-badge earned"><div class="icon">🐍</div><h4>Python Pro</h4><p>Complete Python Bootcamp</p><span class="badge badge-green" style="margin-top:6px;font-size:10px">Earned ✓</span></div>
            <div class="game-badge earned"><div class="icon">🔒</div><h4>Security Guru</h4><p>Pass Security+ exam</p><span class="badge badge-green" style="margin-top:6px;font-size:10px">Earned ✓</span></div>
            <div class="game-badge earned"><div class="icon">🔥</div><h4>Hot Streak</h4><p>7 days consecutive</p><span class="badge badge-green" style="margin-top:6px;font-size:10px">Earned ✓</span></div>
            <div class="game-badge"><div class="icon">☁️</div><h4>Cloud Pilot</h4><p>Enroll in 2 cloud courses</p><span class="badge badge-gray" style="margin-top:6px;font-size:10px">Locked 🔒</span></div>
        </div>
    </div>
</div>
<div class="grid-2">
    <div class="card">
        <div class="card-header"><span class="card-title">🔥 Current Streak</span></div>
        <div class="card-body" style="text-align:center">
            <div style="font-size:56px;margin-bottom:8px">🔥</div>
            <h2 style="font-size:42px;color:var(--accent);font-weight:800">7</h2>
            <p style="color:var(--text-muted);margin-bottom:16px">Consecutive learning days</p>
            <div class="streak-days" id="gamifStreak"></div>
            <p style="font-size:12px;color:var(--text-muted);margin-top:14px">7 more days → "Dedicated Learner" badge 🏆</p>
        </div>
    </div>
    <div class="card">
        <div class="card-header"><span class="card-title">Milestones</span></div>
        <div class="card-body">
            <div style="display:flex;align-items:center;gap:10px;padding:9px 0;border-bottom:1px solid var(--border)">
                <span style="font-size:20px">🎯</span>
                <span style="flex:1;font-size:13.5px">First Course Enrolled</span>
                <span class="badge badge-green"><i class="fa-solid fa-check"></i> Done</span>
            </div>
            <div style="display:flex;align-items:center;gap:10px;padding:9px 0;border-bottom:1px solid var(--border)">
                <span style="font-size:20px">📚</span>
                <span style="flex:1;font-size:13.5px;color:var(--text-muted)">Complete 5 Courses</span>
                <span class="badge badge-gray">Pending</span>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    const days = ['M','T','W','T','F','S','S'];
    const gamifStreak = document.getElementById('gamifStreak');
    if (gamifStreak) {
        gamifStreak.innerHTML = days.map((d,i)=>`<div class="streak-day ${i<7?'done':i===6?'today':''}"><span style="font-size:11px;font-weight:700">${d}</span></div>`).join('');
    }
</script>
@endpush
