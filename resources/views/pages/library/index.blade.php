@extends('layouts.app')

@section('title', 'Content Library – Jezdan Digital Academy')
@section('page_title', 'Content Library')

@section('content')
<div class="section-header"><div><h2>Content Library</h2><p>Downloadable resources, study guides & templates</p></div></div>
<div class="grid-2">
    <div class="card">
        <div class="card-header"><span class="card-title">📚 Study Guides</span></div>
        <div class="card-body">
            <div class="resource-item">
                <div class="resource-icon" style="background:#ef444420;color:#ef4444">📄</div>
                <div class="resource-info"><h4>CompTIA Security+ Study Guide</h4><p>PDF · 4.2 MB</p></div>
                <div><span class="badge badge-gray">PDF</span><button class="btn-icon" style="margin-top:6px" onclick="showToast('File downloaded!','fa-download')"><i class="fa-solid fa-download"></i></button></div>
            </div>
            <div class="resource-item">
                <div class="resource-icon" style="background:#3b82f620;color:#3b82f6">📄</div>
                <div class="resource-info"><h4>Python Cheat Sheet – Beginner</h4><p>PDF · 1.1 MB</p></div>
                <div><span class="badge badge-gray">PDF</span><button class="btn-icon" style="margin-top:6px" onclick="showToast('File downloaded!','fa-download')"><i class="fa-solid fa-download"></i></button></div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header"><span class="card-title">📊 Templates & Reports</span></div>
        <div class="card-body">
            <div class="resource-item">
                <div class="resource-icon" style="background:#22c55e20;color:#22c55e">📊</div>
                <div class="resource-info"><h4>IT Project Plan Template</h4><p>XLSX · 189 KB</p></div>
                <div><span class="badge badge-gray">XLSX</span><button class="btn-icon" style="margin-top:6px" onclick="showToast('File downloaded!','fa-download')"><i class="fa-solid fa-download"></i></button></div>
            </div>
            <div class="resource-item">
                <div class="resource-icon" style="background:#f59e0b20;color:#f59e0b">📊</div>
                <div class="resource-info"><h4>Security Risk Assessment Form</h4><p>XLSX · 245 KB</p></div>
                <div><span class="badge badge-gray">XLSX</span><button class="btn-icon" style="margin-top:6px" onclick="showToast('File downloaded!','fa-download')"><i class="fa-solid fa-download"></i></button></div>
            </div>
        </div>
    </div>
</div>
@endsection
