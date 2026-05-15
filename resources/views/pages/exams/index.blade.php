@extends('layouts.app')

@section('title', 'Exams & Quizzes – Jezdan Digital Academy')
@section('page_title', 'Exams & Quizzes')

@section('content')
<div class="section-header"><div><h2>Exams & Quizzes</h2><p>Test your knowledge and earn certification</p></div></div>
<div class="info-box warning mb-24"><i class="fa-solid fa-shield-halved"></i><p><strong>Anti-Cheating Active:</strong> This exam uses tab-switching detection, webcam monitoring and randomized question order. Ensure your webcam is ready.</p></div>

<div class="grid-3 mb-24">
    @forelse($exams as $exam)
    <div class="card">
        <div class="card-body" style="text-align:center;padding:20px">
            <div style="font-size:36px;margin-bottom:10px">{{ $exam->course->icon }}</div>
            <h4 style="margin-bottom:8px;font-size:14px">{{ $exam->title }}</h4>
            <div style="font-size:12px;color:var(--text-muted);margin-bottom:10px">
                <span>{{ $exam->questions_count }} Questions</span> · <span>{{ $exam->duration_minutes }} mins</span>
            </div>
            <span class="badge {{ $exam->difficulty == 'Hard' ? 'badge-red' : ($exam->difficulty == 'Medium' ? 'badge-orange' : 'badge-green') }}">
                {{ $exam->difficulty }}
            </span>
            <button class="btn btn-primary btn-sm" style="width:100%;margin-top:12px" onclick="showModal('quizModal')"><i class="fa-solid fa-play"></i> Take Exam</button>
        </div>
    </div>
    @empty
    <p>No exams available.</p>
    @endforelse
</div>

<div class="card">
    <div class="card-header"><span class="card-title">Recent Results</span></div>
    <div class="table-wrap">
        <table>
            <thead><tr><th>Exam</th><th>Status</th><th>Date</th><th>Action</th></tr></thead>
            <tbody>
                @forelse($results as $result)
                <tr>
                    <td>{{ $result->course->title }}</td>
                    <td><span class="badge badge-green">Passed</span></td>
                    <td>{{ $result->issued_at->format('M d, Y') }}</td>
                    <td><button class="btn btn-outline btn-sm" onclick="showModal('certModal')">View Cert</button></td>
                </tr>
                @empty
                <tr><td colspan="4" style="text-align:center">No results found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
