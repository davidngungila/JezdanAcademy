@extends('layouts.app')

@section('title', 'AI Tutor – Jezdan Digital Academy')
@section('page_title', 'AI Tutor')

@section('content')
<div class="section-header"><div><h2>AI Tutor</h2><p>Your personal AI-powered learning assistant</p></div><span class="badge badge-green"><i class="fa-solid fa-circle" style="font-size:8px"></i> Online</span></div>
<div class="grid-2">
    <div class="card">
        <div class="card-header"><span class="card-title"><i class="fa-solid fa-robot" style="color:var(--accent)"></i> Chat with AI Tutor</span>
            <button class="btn btn-outline btn-sm" onclick="clearChat()"><i class="fa-solid fa-rotate"></i> New Chat</button>
        </div>
        <div class="chat-window" id="chatWindow"></div>
        <div class="chat-input-row">
            <input class="chat-input" id="chatInput" placeholder="Ask about Security+, Python, networking…" onkeydown="if(event.key==='Enter')sendChat()">
            <button class="chat-send" onclick="sendChat()"><i class="fa-solid fa-paper-plane"></i></button>
        </div>
    </div>
    <div>
        <div class="card mb-20">
            <div class="card-header"><span class="card-title">⚡ Quick Actions</span></div>
            <div class="card-body">
                <button class="btn btn-primary" style="width:100%;margin-bottom:10px" onclick="autoGenQuiz()"><i class="fa-solid fa-wand-magic-sparkles"></i> Auto-Generate Quiz</button>
                <button class="btn btn-outline" style="width:100%;margin-bottom:10px" onclick="askAI('Explain CompTIA Security+ domains')"><i class="fa-solid fa-book-open"></i> Explain Security+ Domains</button>
                <button class="btn btn-outline" style="width:100%;margin-bottom:10px" onclick="askAI('Give me Python tips for beginners')"><i class="fa-brands fa-python"></i> Python Tips for Beginners</button>
            </div>
        </div>
        <div class="card">
            <div class="card-header"><span class="card-title">🎯 Smart Recommendations</span></div>
            <div class="card-body">
                <div class="rec-card" style="margin-bottom:12px;padding:14px">
                    <i class="fa-solid fa-network-wired" style="font-size:20px"></i>
                    <div><h4 style="font-size:13px">Try: Networking+</h4><p style="font-size:12px">Based on your Security+ progress (82%) — bridge your networking gap next.</p></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // AI Chat logic
    function initChatBot() {
        const win = document.getElementById('chatWindow');
        win.innerHTML='';
        addBotMsg('👋 Hello John! I\'m your AI Tutor. I can help with Security+, Python, Networking, and any ICT topics. What would you like to learn today?');
    }
    function addBotMsg(text) {
        const win=document.getElementById('chatWindow');
        const div=document.createElement('div');
        div.className='chat-msg bot';
        div.innerHTML=`<div class="chat-bubble">${text}</div>`;
        win.appendChild(div);
        win.scrollTop=win.scrollHeight;
    }
    function addUserMsg(text) {
        const win=document.getElementById('chatWindow');
        const div=document.createElement('div');
        div.className='chat-msg user';
        div.innerHTML=`<div class="chat-bubble">${text}</div>`;
        win.appendChild(div);
        win.scrollTop=win.scrollHeight;
    }
    function sendChat() {
        const input=document.getElementById('chatInput');
        const msg=input.value.trim();
        if(!msg) return;
        addUserMsg(msg);
        input.value='';
        setTimeout(()=>addBotMsg('I am processing your request about "' + msg + '"...'), 1000);
    }
    function askAI(q) {
        document.getElementById('chatInput').value=q;
        sendChat();
    }
    function clearChat() { initChatBot(); }
    function autoGenQuiz() {
        addBotMsg('🎯 <strong>Auto-Generated Quiz: CompTIA Security+</strong><br><br>1. What does "AAA" stand for in network security?<br>A) Authentication, Authorization, Accounting ✓<br>B) Availability, Access, Auditing<br><br>Would you like more questions?');
    }
    document.addEventListener('DOMContentLoaded', initChatBot);
</script>
@endpush
