@extends('layouts.app')

@section('title', 'My Certificates – Jezdan Digital Academy')
@section('page_title', 'My Certificates')

@section('content')
<div class="section-header"><div><h2>My Certificates</h2><p>Download, share or verify your credentials</p></div></div>
<div class="grid-3">
    <!-- Cert 1 -->
    <div class="card">
        <div style="background:linear-gradient(135deg,#0b1f3a,#1a4080);padding:28px;text-align:center;border-radius:14px 14px 0 0">
            <div style="font-size:36px;margin-bottom:8px">🔒</div>
            <h4 style="color:#fff;font-size:13px;font-weight:700">CompTIA Security+ (SY0-701)</h4>
            <div style="color:rgba(255,255,255,.5);font-size:11px;margin-top:4px">Certificate of Completion</div>
        </div>
        <div class="card-body" style="padding:14px">
            <div style="font-size:11px;color:var(--text-muted);margin-bottom:10px">
                <i class="fa-solid fa-hashtag" style="color:var(--accent)"></i> JDA-2026-00892<br>
                <i class="fa-regular fa-calendar" style="color:var(--accent)"></i> Issued: May 2026 · Valid 3 years
            </div>
            <div style="display:flex;gap:8px">
                <button class="btn btn-primary btn-sm" style="flex:1" onclick="showModal('certModal')"><i class="fa-solid fa-download"></i> Download</button>
                <button class="btn btn-icon" onclick="showToast('Certificate link copied!','fa-share')"><i class="fa-solid fa-share-nodes"></i></button>
            </div>
        </div>
    </div>
    <!-- Cert 2 -->
    <div class="card">
        <div style="background:linear-gradient(135deg,#2d1b69,#1a4080);padding:28px;text-align:center;border-radius:14px 14px 0 0">
            <div style="font-size:36px;margin-bottom:8px">🛡️</div>
            <h4 style="color:#fff;font-size:13px;font-weight:700">Cybersecurity Fundamentals</h4>
            <div style="color:rgba(255,255,255,.5);font-size:11px;margin-top:4px">Certificate of Completion</div>
        </div>
        <div class="card-body" style="padding:14px">
            <div style="font-size:11px;color:var(--text-muted);margin-bottom:10px">
                <i class="fa-solid fa-hashtag" style="color:var(--accent)"></i> JDA-2026-00534<br>
                <i class="fa-regular fa-calendar" style="color:var(--accent)"></i> Issued: Apr 2026 · Valid 3 years
            </div>
            <div style="display:flex;gap:8px">
                <button class="btn btn-primary btn-sm" style="flex:1" onclick="showModal('certModal')"><i class="fa-solid fa-download"></i> Download</button>
                <button class="btn btn-icon" onclick="showToast('Certificate link copied!','fa-share')"><i class="fa-solid fa-share-nodes"></i></button>
            </div>
        </div>
    </div>
</div>
@endsection
