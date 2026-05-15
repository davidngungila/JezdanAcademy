@extends('layouts.app')

@section('title', 'Content Library – Jezdan Digital Academy')
@section('page_title', 'Content Library')

@section('content')
<div class="section-header"><div><h2>Content Library</h2><p>Downloadable resources, study guides & templates</p></div></div>
<div class="grid-2">
    @foreach(['Study Guide', 'Template'] as $cat)
    <div class="card">
        <div class="card-header"><span class="card-title">{{ $cat === 'Study Guide' ? '📚 Study Guides' : '📊 Templates & Reports' }}</span></div>
        <div class="card-body">
            @forelse($resources->where('category', $cat) as $res)
            <div class="resource-item">
                <div class="resource-icon" style="background:rgba(245,132,52,0.1);color:var(--accent)">
                    {{ $res->type == 'PDF' ? '📄' : '📊' }}
                </div>
                <div class="resource-info"><h4>{{ $res->title }}</h4><p>{{ $res->type }} · {{ $res->size }}</p></div>
                <div><span class="badge badge-gray">{{ $res->type }}</span><button class="btn-icon" style="margin-top:6px" onclick="showToast('File downloaded!','fa-download')"><i class="fa-solid fa-download"></i></button></div>
            </div>
            @empty
            <p style="color:var(--text-muted); font-size:13px;">No {{ strtolower($cat) }}s available.</p>
            @endforelse
        </div>
    </div>
    @endforeach
</div>
@endsection
