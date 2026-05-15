@extends('layouts.app')

@section('title', 'Dashboard – Jezdan Digital Academy')
@section('page_title', 'Dashboard')

@section('content')
<div class="section-header">
    <div>
        <h2>Welcome back, John! 👋</h2>
        <p>Here's what's happening with your learning today · <span id="todayDate"></span></p>
    </div>
    <button class="btn btn-primary" onclick="navigateTo('/courses')"><i class="fa-solid fa-plus"></i> Enroll New Course</button>
</div>

<!-- STATS -->
<div class="stats-grid mb-24">
    <div class="stat-card">
        <div class="stat-icon orange"><i class="fa-solid fa-book-open"></i></div>
        <div class="stat-info"><h3>7</h3><p>Enrolled Courses</p><div class="change up"><i class="fa-solid fa-arrow-up"></i> 2 this month</div></div>
    </div>
    <div class="stat-card">
        <div class="stat-icon green"><i class="fa-solid fa-circle-check"></i></div>
        <div class="stat-info"><h3>3</h3><p>Completed Courses</p><div class="change up"><i class="fa-solid fa-arrow-up"></i> 1 this week</div></div>
    </div>
    <div class="stat-card">
        <div class="stat-icon blue"><i class="fa-solid fa-award"></i></div>
        <div class="stat-info"><h3>5</h3><p>Certificates Earned</p><div class="change up"><i class="fa-solid fa-arrow-up"></i> Verify online</div></div>
    </div>
    <div class="stat-card">
        <div class="stat-icon purple"><i class="fa-solid fa-fire"></i></div>
        <div class="stat-info"><h3>7</h3><p>Day Streak 🔥</p><div class="change up"><i class="fa-solid fa-arrow-up"></i> Personal best!</div></div>
    </div>
</div>

<div class="grid-2 mb-24">
    <!-- ENROLLMENT CHART -->
    <div class="card">
        <div class="card-header">
            <span class="card-title">Monthly Enrollments</span>
            <span class="badge badge-green"><i class="fa-solid fa-arrow-trend-up"></i> +18%</span>
        </div>
        <div class="card-body"><canvas id="enrollChart" height="220"></canvas></div>
    </div>
    <!-- COMPLETION CHART -->
    <div class="card">
        <div class="card-header">
            <span class="card-title">Course Completion Rate</span>
            <span class="badge badge-orange">78%</span>
        </div>
        <div class="card-body"><canvas id="completionChart" height="220"></canvas></div>
    </div>
</div>

<!-- CONTINUE LEARNING -->
<div class="card mb-24">
    <div class="card-header">
        <span class="card-title"><i class="fa-solid fa-play-circle" style="color:var(--accent)"></i> Continue Learning</span>
        <button class="btn btn-outline btn-sm" onclick="navigateTo('/my-learning')">View All</button>
    </div>
    <div class="card-body">
        <div id="continueLearning">
            <!-- Sample Data -->
            <div style="display:flex;align-items:center;gap:14px;padding:13px 0;border-bottom:1px solid var(--border)">
                <div style="width:44px;height:44px;background:#0b1f3a;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:22px;flex-shrink:0">🔒</div>
                <div style="flex:1">
                    <div style="font-size:14px;font-weight:600;margin-bottom:6px">CompTIA Security+ (SY0-701)</div>
                    <div class="progress-bar" style="margin-bottom:4px"><div class="progress-fill" style="width:82%"></div></div>
                    <div style="font-size:12px;color:var(--text-muted)">82% complete · 15 lessons remaining</div>
                </div>
                <button class="btn btn-primary btn-sm" onclick="showToast('Resuming lesson…','fa-play')"><i class="fa-solid fa-play"></i> Resume</button>
            </div>
        </div>
    </div>
</div>

<!-- RECOMMENDATION + STREAK -->
<div class="grid-2">
    <div>
        <div class="rec-card">
            <i class="fa-solid fa-robot"></i>
            <div>
                <h4>AI Recommendation</h4>
                <p>Based on your Security+ progress, try <strong>Networking Fundamentals</strong> to fill skill gaps.</p>
                <button class="btn btn-outline btn-sm" onclick="navigateTo('/courses')">Explore Course</button>
            </div>
        </div>
        <div class="info-box warning"><i class="fa-solid fa-triangle-exclamation"></i><p><strong>Skills Gap Detected:</strong> Your Networking score is 42%. Complete 3 more lessons to reach proficiency.</p></div>
    </div>
    <div class="card">
        <div class="card-header"><span class="card-title">🔥 Learning Streak</span><span class="badge badge-orange">7 Days</span></div>
        <div class="card-body">
            <div class="streak-days" id="streakDays"></div>
            <p style="font-size:13px;color:var(--text-muted);margin-top:14px">Keep going! You're on a 7-day streak. Reach 14 days to unlock the <strong>"Dedicated Learner"</strong> badge.</p>
            <div style="height:8px;background:var(--border);border-radius:10px;margin-top:14px;overflow:hidden;"><div style="width:50%;background:var(--accent);height:100%;border-radius:10px;"></div></div>
            <p style="font-size:12px;color:var(--text-muted);margin-top:6px">7 / 14 days to next badge</p>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Dashboard Charts
    function initCharts() {
        const ctx1 = document.getElementById('enrollChart').getContext('2d');
        new Chart(ctx1, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                datasets: [{
                    label: 'Enrollments',
                    data: [12, 19, 15, 25, 32],
                    borderColor: '#f58434',
                    tension: 0.4,
                    fill: true,
                    backgroundColor: 'rgba(245, 132, 52, 0.1)'
                }]
            },
            options: { responsive: true, plugins: { legend: { display: false } } }
        });

        const ctx2 = document.getElementById('completionChart').getContext('2d');
        new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ['Completed', 'In Progress', 'Not Started'],
                datasets: [{
                    data: [3, 4, 2],
                    backgroundColor: ['#22c55e', '#f58434', '#e8ecf2']
                }]
            },
            options: { responsive: true, cutout: '70%', plugins: { legend: { position: 'bottom' } } }
        });
    }

    // Initialize streak days
    const days = ['M','T','W','T','F','S','S'];
    const streakDays = document.getElementById('streakDays');
    if (streakDays) {
        streakDays.innerHTML = days.map((d,i)=>`<div class="streak-day ${i<7?'done':i===6?'today':''}"><span style="font-size:11px;font-weight:700">${d}</span></div>`).join('');
    }

    document.addEventListener('DOMContentLoaded', initCharts);
</script>
@endpush
