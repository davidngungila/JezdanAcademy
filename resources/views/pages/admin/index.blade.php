@extends('layouts.app')

@section('title', 'Admin Panel – Jezdan Digital Academy')
@section('page_title', 'Admin Panel')

@section('content')
<div class="section-header"><div><h2>Admin Panel</h2><p>Platform management & revenue overview</p></div><span class="badge badge-red"><i class="fa-solid fa-shield-halved"></i> Admin Access</span></div>

<!-- ADMIN STATS -->
<div class="stats-grid mb-24">
    <div class="stat-card"><div class="stat-icon orange"><i class="fa-solid fa-dollar-sign"></i></div><div class="stat-info"><h3>$45,230</h3><p>Total Revenue</p><div class="change up"><i class="fa-solid fa-arrow-up"></i> +22% this month</div></div></div>
    <div class="stat-card"><div class="stat-icon blue"><i class="fa-solid fa-users"></i></div><div class="stat-info"><h3>1,230</h3><p>Total Students</p><div class="change up"><i class="fa-solid fa-arrow-up"></i> +87 this week</div></div></div>
    <div class="stat-card"><div class="stat-icon green"><i class="fa-solid fa-book"></i></div><div class="stat-info"><h3>47</h3><p>Active Courses</p><div class="change up"><i class="fa-solid fa-arrow-up"></i> 4 pending review</div></div></div>
    <div class="stat-card"><div class="stat-icon purple"><i class="fa-solid fa-award"></i></div><div class="stat-info"><h3>892</h3><p>Certificates Issued</p><div class="change up"><i class="fa-solid fa-arrow-up"></i> 34 this month</div></div></div>
</div>

<div class="grid-2 mb-24">
    <div class="card">
        <div class="card-header"><span class="card-title">Revenue Trend</span><button class="btn btn-outline btn-sm" onclick="showToast('Exporting revenue report…','fa-file-excel')"><i class="fa-solid fa-file-excel"></i> Export</button></div>
        <div class="card-body"><canvas id="revenueChart" height="200"></canvas></div>
    </div>
    <div class="card">
        <div class="card-header"><span class="card-title">Course Approvals</span></div>
        <div class="card-body">
            <div class="approval-item" style="display:flex;align-items:center;gap:10px;padding:10px 0;border-bottom:1px solid var(--border)">
                <div style="flex:1">
                    <div style="font-size:13.5px;font-weight:600">Ethical Hacking Advanced</div>
                    <div style="font-size:12px;color:var(--text-muted)">James Kimaro</div>
                </div>
                <button class="btn btn-sm" style="background:var(--success);color:#fff;border:none" onclick="showToast('Course approved!','fa-check')">✓</button>
                <button class="btn btn-sm" style="background:var(--danger);color:#fff;border:none" onclick="showToast('Course rejected','fa-xmark')">✗</button>
            </div>
            <div class="approval-item" style="display:flex;align-items:center;gap:10px;padding:10px 0;border-bottom:1px solid var(--border)">
                <div style="flex:1">
                    <div style="font-size:13.5px;font-weight:600">Mobile App Development</div>
                    <div style="font-size:12px;color:var(--text-muted)">Sarah Nyamizi</div>
                </div>
                <button class="btn btn-sm" style="background:var(--success);color:#fff;border:none" onclick="showToast('Course approved!','fa-check')">✓</button>
                <button class="btn btn-sm" style="background:var(--danger);color:#fff;border:none" onclick="showToast('Course rejected','fa-xmark')">✗</button>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <span class="card-title">User Management</span>
        <div style="display:flex;gap:8px">
            <button class="btn btn-primary btn-sm" onclick="showToast('Excel upload ready','fa-file-excel')"><i class="fa-solid fa-file-arrow-up"></i> Import Users</button>
            <button class="btn btn-outline btn-sm" onclick="showToast('Exporting user list…','fa-download')"><i class="fa-solid fa-download"></i> Export</button>
        </div>
    </div>
    <div class="table-wrap">
        <table>
            <thead><tr><th>User</th><th>Role</th><th>Org</th><th>Enrolled</th><th>Status</th><th>Actions</th></tr></thead>
            <tbody>
                <tr>
                    <td><div class="user-row"><div class="ava" style="background:#3b82f6">AR</div>Amina Rashidi</div></td>
                    <td><span class="badge badge-gray">Student</span></td>
                    <td>Individual</td>
                    <td>5</td>
                    <td><span class="badge badge-green">Active</span></td>
                    <td>
                        <div style="display:flex;gap:6px">
                            <button class="btn-icon" onclick="showToast('Editing user…','fa-pen')"><i class="fa-solid fa-pen"></i></button>
                            <button class="btn-icon" onclick="showToast('User suspended','fa-lock')"><i class="fa-solid fa-ban"></i></button>
                        </div>
                    </td>
                </tr>
                <!-- More users -->
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('revenueChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                datasets: [{
                    label: 'Revenue ($)',
                    data: [8200, 9400, 11000, 10200, 14500],
                    backgroundColor: '#f58434'
                }]
            },
            options: { responsive: true, plugins: { legend: { display: false } } }
        });
    });
</script>
@endpush
