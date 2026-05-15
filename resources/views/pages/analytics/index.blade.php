@extends('layouts.app')

@section('title', 'Analytics – Jezdan Digital Academy')
@section('page_title', 'Analytics')

@section('content')
<div class="section-header"><div><h2>Analytics & Business Intelligence</h2><p>Data-driven insights for learning outcomes</p></div>
    <div style="display:flex;gap:8px">
        <button class="btn btn-outline btn-sm" onclick="showToast('Generating PDF report…','fa-file-pdf')"><i class="fa-solid fa-file-pdf"></i> PDF</button>
        <button class="btn btn-primary btn-sm" onclick="showToast('Exporting to Excel…','fa-file-excel')"><i class="fa-solid fa-file-excel"></i> Excel</button>
    </div>
</div>

<div class="stats-grid mb-24">
    <div class="stat-card"><div class="stat-icon orange"><i class="fa-solid fa-percent"></i></div><div class="stat-info"><h3>78%</h3><p>Completion Rate</p></div></div>
    <div class="stat-card"><div class="stat-icon blue"><i class="fa-solid fa-graduation-cap"></i></div><div class="stat-info"><h3>92%</h3><p>Pass Rate</p></div></div>
    <div class="stat-card"><div class="stat-icon green"><i class="fa-solid fa-star"></i></div><div class="stat-info"><h3>4.6/5</h3><p>Avg Rating</p></div></div>
    <div class="stat-card"><div class="stat-icon purple"><i class="fa-solid fa-chart-line"></i></div><div class="stat-info"><h3>340%</h3><p>ROI for Orgs</p></div></div>
</div>

<div class="grid-2 mb-24">
    <div class="card">
        <div class="card-header"><span class="card-title">Monthly Revenue & Enrollments</span></div>
        <div class="card-body"><canvas id="analyticsChart" height="220"></canvas></div>
    </div>
    <div class="card">
        <div class="card-header"><span class="card-title">ROI Tracking</span></div>
        <div class="card-body"><canvas id="roiChart" height="220"></canvas></div>
    </div>
</div>

<div class="card">
    <div class="card-header"><span class="card-title">Skills Gap Analysis</span><span class="badge badge-red"><i class="fa-solid fa-triangle-exclamation"></i> 3 gaps detected</span></div>
    <div class="card-body">
        <div class="skill-row"><span class="skill-label">Networking</span><div class="skill-bar"><div class="skill-fill" style="width:42%; background:var(--danger)"></div></div><span class="skill-pct" style="color:var(--danger)">42%</span></div>
        <div class="skill-row"><span class="skill-label">Cloud Computing</span><div class="skill-bar"><div class="skill-fill" style="width:61%; background:var(--warning)"></div></div><span class="skill-pct" style="color:var(--warning)">61%</span></div>
        <div class="skill-row"><span class="skill-label">Cybersecurity</span><div class="skill-bar"><div class="skill-fill" style="width:68%; background:var(--warning)"></div></div><span class="skill-pct" style="color:var(--warning)">68%</span></div>
        <div class="skill-row"><span class="skill-label">Python Programming</span><div class="skill-bar"><div class="skill-fill" style="width:85%; background:var(--success)"></div></div><span class="skill-pct" style="color:var(--success)">85%</span></div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctx1 = document.getElementById('analyticsChart').getContext('2d');
        new Chart(ctx1, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                datasets: [{
                    label: 'Enrollments',
                    data: [120, 190, 300, 250, 420],
                    borderColor: '#f58434',
                    tension: 0.4
                }]
            },
            options: { responsive: true }
        });

        const ctx2 = document.getElementById('roiChart').getContext('2d');
        new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['TechCorp', 'Gov Agency', 'NGO Africa', 'UDSM'],
                datasets: [{
                    label: 'ROI %',
                    data: [310, 280, 450, 340],
                    backgroundColor: '#3b82f6'
                }]
            },
            options: { responsive: true }
        });
    });
</script>
@endpush
