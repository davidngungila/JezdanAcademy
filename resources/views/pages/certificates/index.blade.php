@extends('layouts.app')

@section('title', 'My Certificates – Jezdan Digital Academy')
@section('page_title', 'My Certificates')

@section('content')
<div class="section-header"><div><h2>My Certificates</h2><p>Download, share or verify your credentials</p></div></div>
<div class="grid-3">
    @forelse($certificates as $cert)
    <div class="card">
        <div style="background:{{ $cert->course->bg_color }};padding:28px;text-align:center;border-radius:14px 14px 0 0">
            <div style="font-size:36px;margin-bottom:8px">{{ $cert->course->icon }}</div>
            <h4 style="color:#fff;font-size:13px;font-weight:700">{{ $cert->course->title }}</h4>
            <div style="color:rgba(255,255,255,.5);font-size:11px;margin-top:4px">Certificate of Achievement</div>
        </div>
        <div class="card-body" style="padding:14px">
            <div style="font-size:11px;color:var(--text-muted);margin-bottom:10px">
                <i class="fa-solid fa-hashtag" style="color:var(--accent)"></i> {{ $cert->certificate_number }}<br>
                <i class="fa-regular fa-calendar" style="color:var(--accent)"></i> Issued: {{ $cert->issued_at->format('M Y') }}
            </div>
            <div style="display:flex;gap:8px">
                <button class="btn btn-primary btn-sm" style="flex:1" onclick="showModal('certModal')"><i class="fa-solid fa-download"></i> Download</button>
                <button class="btn btn-icon" onclick="showToast('Certificate link copied!','fa-share')"><i class="fa-solid fa-share-nodes"></i></button>
            </div>
        </div>
    </div>
    @empty
    <p>You haven't earned any certificates yet.</p>
    @endforelse
</div>
@endsection
