@extends('layouts.app')

@section('title', 'Instructor Panel – Jezdan Digital Academy')
@section('page_title', 'Instructor Panel')

@section('content')
<div class="section-header"><div><h2>Instructor Panel</h2><p>Create courses, upload content, manage students</p></div></div>
<div class="grid-2 mb-24">
    <div class="card">
        <div class="card-header"><span class="card-title">Create New Course</span></div>
        <div class="card-body">
            <div class="form-group"><label>Course Title</label><input class="form-control" placeholder="e.g. Ethical Hacking Fundamentals"></div>
            <div class="form-row">
                <div class="form-group"><label>Category</label><select class="form-control"><option>ICT</option><option>Security</option><option>Business</option><option>Finance</option></select></div>
                <div class="form-group"><label>Price (USD)</label><input class="form-control" type="number" placeholder="49"></div>
            </div>
            <div class="form-group"><label>Description</label><textarea class="form-control" rows="3" placeholder="Course overview…"></textarea></div>
            <div class="upload-zone" onclick="showToast('Video upload ready – connect cloud storage','fa-cloud-arrow-up')">
                <i class="fa-solid fa-cloud-arrow-up"></i>
                <p>Upload Course Video / Thumbnail</p>
                <p style="font-size:11px;margin-top:5px">MP4, AVI, MKV · Max 2GB</p>
            </div>
            <button class="btn btn-primary" style="margin-top:14px;width:100%" onclick="showToast('Course submitted for admin approval!','fa-check-circle')"><i class="fa-solid fa-paper-plane"></i> Submit for Approval</button>
        </div>
    </div>
    <div>
        <div class="card mb-20">
            <div class="card-header"><span class="card-title">My Courses Stats</span></div>
            <div class="card-body">
                <div class="stats-grid" style="grid-template-columns:1fr 1fr">
                    <div class="stat-card" style="flex-direction:column;align-items:flex-start;gap:6px"><div class="stat-icon orange"><i class="fa-solid fa-users"></i></div><div class="stat-info"><h3>312</h3><p>Total Students</p></div></div>
                    <div class="stat-card" style="flex-direction:column;align-items:flex-start;gap:6px"><div class="stat-icon green"><i class="fa-solid fa-dollar-sign"></i></div><div class="stat-info"><h3>$4,820</h3><p>Revenue</p></div></div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header"><span class="card-title">Student Management</span></div>
            <div class="table-wrap">
                <table><thead><tr><th>Student</th><th>Course</th><th>Progress</th></tr></thead>
                <tbody>
                    <tr><td><div class="user-row"><div class="ava" style="background:#3b82f6">AM</div>Amina Moshi</div></td><td>Python</td><td><div class="progress-bar" style="width:80px"><div class="progress-fill" style="width:75%"></div></div></td></tr>
                    <tr><td><div class="user-row"><div class="ava" style="background:#22c55e">JK</div>John Kilimanjaro</div></td><td>Security+</td><td><div class="progress-bar" style="width:80px"><div class="progress-fill" style="width:55%"></div></div></td></tr>
                    <tr><td><div class="user-row"><div class="ava" style="background:#8b5cf6">FS</div>Fatuma Shayo</div></td><td>AWS Cloud</td><td><div class="progress-bar" style="width:80px"><div class="progress-fill" style="width:30%"></div></div></td></tr>
                </tbody></table>
            </div>
        </div>
    </div>
</div>
@endsection
