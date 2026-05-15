@extends('layouts.app')

@section('title', 'Exams & Quizzes – Jezdan Digital Academy')
@section('page_title', 'Exams & Quizzes')

@section('content')
<div class="section-header"><div><h2>Exams & Quizzes</h2><p>Test your knowledge and earn certification</p></div></div>
<div class="info-box warning mb-24"><i class="fa-solid fa-shield-halved"></i><p><strong>Anti-Cheating Active:</strong> This exam uses tab-switching detection, webcam monitoring and randomized question order. Ensure your webcam is ready.</p></div>

<div class="grid-3 mb-24">
    <div class="card">
        <div class="card-body" style="text-align:center;padding:20px">
            <div style="font-size:36px;margin-bottom:10px">🔒</div>
            <h4 style="margin-bottom:8px;font-size:14px">CompTIA Security+</h4>
            <div style="font-size:12px;color:var(--text-muted);margin-bottom:10px">
                <span>90 Questions</span> · <span>90 mins</span>
            </div>
            <span class="badge badge-red">Hard</span>
            <button class="btn btn-primary btn-sm" style="width:100%;margin-top:12px" onclick="showModal('quizModal')"><i class="fa-solid fa-play"></i> Take Exam</button>
        </div>
    </div>
    <div class="card">
        <div class="card-body" style="text-align:center;padding:20px">
            <div style="font-size:36px;margin-bottom:10px">🐍</div>
            <h4 style="margin-bottom:8px;font-size:14px">Python Fundamentals</h4>
            <div style="font-size:12px;color:var(--text-muted);margin-bottom:10px">
                <span>50 Questions</span> · <span>60 mins</span>
            </div>
            <span class="badge badge-orange">Medium</span>
            <button class="btn btn-primary btn-sm" style="width:100%;margin-top:12px" onclick="showModal('quizModal')"><i class="fa-solid fa-play"></i> Take Exam</button>
        </div>
    </div>
    <div class="card">
        <div class="card-body" style="text-align:center;padding:20px">
            <div style="font-size:36px;margin-bottom:10px">🌐</div>
            <h4 style="margin-bottom:8px;font-size:14px">CompTIA Network+</h4>
            <div style="font-size:12px;color:var(--text-muted);margin-bottom:10px">
                <span>90 Questions</span> · <span>90 mins</span>
            </div>
            <span class="badge badge-red">Hard</span>
            <button class="btn btn-primary btn-sm" style="width:100%;margin-top:12px" onclick="showModal('quizModal')"><i class="fa-solid fa-play"></i> Retake</button>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header"><span class="card-title">Recent Results</span></div>
    <div class="table-wrap">
        <table>
            <thead><tr><th>Exam</th><th>Score</th><th>Status</th><th>Date</th><th>Action</th></tr></thead>
            <tbody>
                <tr><td>CompTIA Security+</td><td><strong>82%</strong></td><td><span class="badge badge-green">Passed</span></td><td>May 10, 2026</td><td><button class="btn btn-outline btn-sm" onclick="showModal('certModal')">View Cert</button></td></tr>
                <tr><td>Python Fundamentals</td><td><strong>91%</strong></td><td><span class="badge badge-green">Passed</span></td><td>Apr 28, 2026</td><td><button class="btn btn-outline btn-sm" onclick="showModal('certModal')">View Cert</button></td></tr>
                <tr><td>Network+ Practice</td><td><strong>58%</strong></td><td><span class="badge badge-red">Failed</span></td><td>Apr 15, 2026</td><td><button class="btn btn-primary btn-sm" onclick="showModal('quizModal')">Retake</button></td></tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Quiz logic
    const QUIZ_QUESTIONS = [
        {q:'Which protocol is used for secure web communication?',opts:['HTTP','FTP','HTTPS','SMTP'],ans:2,explain:'HTTPS (HyperText Transfer Protocol Secure) uses TLS/SSL encryption for secure web communication.'},
        {q:'What does CIA stand for in cybersecurity?',opts:['Central Intelligence Agency','Confidentiality, Integrity, Availability','Computer Information Assurance','Critical Infrastructure Analysis'],ans:1,explain:'CIA Triad: Confidentiality (data private), Integrity (data accurate), Availability (data accessible).'},
        {q:'Which attack intercepts communication between two parties?',opts:['Phishing','SQL Injection','Man-in-the-Middle','DDoS'],ans:2,explain:'Man-in-the-Middle (MitM) attacks intercept and potentially alter communications between two parties.'},
        {q:'What is the primary purpose of a firewall?',opts:['Encrypt data','Filter network traffic','Store passwords','Speed up internet'],ans:1,explain:'Firewalls monitor and filter incoming/outgoing network traffic based on security rules.'},
        {q:'Which of the following is an example of multi-factor authentication?',opts:['Password only','Username + Password','Password + SMS OTP','Security question only'],ans:2,explain:'MFA uses two or more verification methods: something you know + something you have (password + OTP).'},
    ];

    let quizIndex=0, quizScore=0, quizAnswered=false, quizInterval;

    function startQuiz() {
        quizIndex=0; quizScore=0; quizAnswered=false;
        renderQuestion();
        startTimer();
    }

    function renderQuestion() {
        const q = QUIZ_QUESTIONS[quizIndex];
        document.getElementById('qNum').textContent = quizIndex+1;
        document.getElementById('quizQuestion').textContent = (quizIndex+1)+'. '+q.q;
        document.getElementById('quizOptions').innerHTML = q.opts.map((o,i)=>`<div class="quiz-opt" onclick="selectAnswer(${i})">${String.fromCharCode(65+i)}. ${o}</div>`).join('');
        document.getElementById('quizProgressBar').style.width = ((quizIndex+1)/QUIZ_QUESTIONS.length*100)+'%';
        document.getElementById('quizScore').textContent = `Score: ${quizScore}/${quizIndex}`;
        document.getElementById('nextQBtn').disabled=true;
        document.getElementById('quizExplain').style.display='none';
        quizAnswered=false;
    }

    function selectAnswer(i) {
        if(quizAnswered) return;
        quizAnswered=true;
        const q=QUIZ_QUESTIONS[quizIndex];
        const opts=document.querySelectorAll('.quiz-opt');
        opts[q.ans].classList.add('correct');
        if(i!==q.ans) opts[i].classList.add('wrong'); else quizScore++;
        document.getElementById('quizScore').textContent=`Score: ${quizScore}/${quizIndex+1}`;
        const ex=document.getElementById('quizExplain');
        ex.style.display='block';
        ex.innerHTML=`<div class="info-box ${i===q.ans?'success':'warning'}"><i class="fa-solid fa-${i===q.ans?'check-circle':'circle-exclamation'}"></i><p><strong>${i===q.ans?'Correct!':'Incorrect.'}</strong> ${q.explain}</p></div>`;
        document.getElementById('nextQBtn').disabled=false;
    }

    function nextQuestion() {
        quizIndex++;
        if(quizIndex>=QUIZ_QUESTIONS.length) {
            const pct=Math.round(quizScore/QUIZ_QUESTIONS.length*100);
            document.getElementById('quizQuestion').textContent='🎉 Exam Complete!';
            document.getElementById('quizOptions').innerHTML=`<div style="text-align:center;padding:20px"><div style="font-size:52px;margin-bottom:10px">${pct>=70?'🏆':'📚'}</div><h2 style="font-size:28px;color:var(--accent)">${pct}%</h2><p style="color:var(--text-muted)">${pct>=70?'Congratulations! You passed!':'Keep studying. Try again!'}</p><div style="margin-top:14px"><span class="badge ${pct>=70?'badge-green':'badge-red'}" style="font-size:14px;padding:8px 20px">${pct>=70?'PASSED ✓':'FAILED ✗'}</span></div></div>`;
            document.getElementById('nextQBtn').style.display='none';
            clearInterval(quizInterval);
            if(pct>=70) setTimeout(()=>showToast('Certificate unlocked! Check My Certificates.','fa-award'),1000);
            return;
        }
        renderQuestion();
    }

    function startTimer(){
        let t=600;
        clearInterval(quizInterval);
        quizInterval=setInterval(()=>{
            t--;
            const m=Math.floor(t/60).toString().padStart(2,'0');
            const s=(t%60).toString().padStart(2,'0');
            document.getElementById('quizTimer').textContent=`${m}:${s}`;
            if(t<=0){clearInterval(quizInterval);showToast('Time up! Exam submitted.','fa-clock');}
        },1000);
    }
</script>
@endpush
