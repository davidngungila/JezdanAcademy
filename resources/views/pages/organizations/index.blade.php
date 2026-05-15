@extends('layouts.app')

@section('title', 'Organizations – Jezdan Digital Academy')
@section('page_title', 'Organization Portal')

@section('content')
<div class="section-header"><div><h2>Organization Portal</h2><p>Manage bulk enrollments and team learning</p></div><button class="btn btn-primary" onclick="showToast('New organization form opened','fa-building')"><i class="fa-solid fa-plus"></i> Add Organization</button></div>

<div class="org-pills">
    <div class="org-pill active">🏢 TechCorp Tanzania</div>
    <div class="org-pill">🏛️ Gov Agency</div>
    <div class="org-pill">🌍 NGO Africa</div>
    <div class="org-pill">🎓 UDSM</div>
</div>

<div class="grid-2 mb-24">
    <div class="card">
        <div class="card-header"><span class="card-title">TechCorp Tanzania — Overview</span></div>
        <div class="card-body">
            <div class="stats-grid" style="grid-template-columns:1fr 1fr;margin-bottom:0">
                <div class="stat-card" style="flex-direction:column;gap:8px;align-items:flex-start"><div class="stat-icon blue"><i class="fa-solid fa-users"></i></div><div class="stat-info"><h3>45</h3><p>Team Members</p></div></div>
                <div class="stat-card" style="flex-direction:column;gap:8px;align-items:flex-start"><div class="stat-icon green"><i class="fa-solid fa-dollar-sign"></i></div><div class="stat-info"><h3>$2,480</h3><p>Total Spend</p></div></div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header"><span class="card-title">Bulk Enrollment</span></div>
        <div class="card-body">
            <div class="upload-zone" onclick="showToast('Excel file uploaded: 45 users imported','fa-users')">
                <i class="fa-solid fa-file-excel" style="color:#22c55e"></i>
                <p>Drop Excel/CSV file for bulk import</p>
                <p style="font-size:11px;margin-top:5px">Format: Name, Email, Role, Department</p>
            </div>
            <button class="btn btn-dark" style="margin-top:12px;width:100%" onclick="showModal('bulkPayModal')"><i class="fa-solid fa-credit-card"></i> Bulk Purchase – All Team</button>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header"><span class="card-title">Team Members</span></div>
    <div class="table-wrap">
        <table>
            <thead><tr><th>Name</th><th>Department</th><th>Courses</th><th>Progress</th><th>Status</th></tr></thead>
            <tbody>
                <tr><td><div class="user-row"><div class="ava" style="background:#3b82f6">MJ</div>Mohamed Juma</div></td><td>IT</td><td>3</td><td><div class="progress-bar" style="width:90px"><div class="progress-fill" style="width:88%"></div></div></td><td><span class="badge badge-green">Active</span></td></tr>
                <tr><td><div class="user-row"><div class="ava" style="background:#f58434">ZK</div>Zuhura Kilonzo</div></td><td>Finance</td><td>2</td><td><div class="progress-bar" style="width:90px"><div class="progress-fill" style="width:62%"></div></div></td><td><span class="badge badge-green">Active</span></td></tr>
                <tr><td><div class="user-row"><div class="ava" style="background:#8b5cf6">BS</div>Baraka Sanga</div></td><td>Management</td><td>1</td><td><div class="progress-bar" style="width:90px"><div class="progress-fill" style="width:25%"></div></div></td><td><span class="badge badge-orange">In Progress</span></td></tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
