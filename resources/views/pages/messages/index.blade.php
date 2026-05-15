@extends('layouts.app')

@section('title', 'Messages – Jezdan Digital Academy')
@section('page_title', 'Messages')

@section('content')
<div class="section-header"><div><h2>Messages</h2><p>In-app messaging and notifications</p></div>
    <button class="btn btn-primary btn-sm" onclick="showToast('WhatsApp integration: +255 762 000 888','fa-whatsapp')" style="background:#25D366;border-color:#25D366"><i class="fa-brands fa-whatsapp"></i> WhatsApp</button>
</div>
<div class="grid-2">
    <div class="card">
        <div class="card-header"><span class="card-title">Inbox</span><span class="badge badge-orange">4 unread</span></div>
        <div class="msg-list">
            <div class="msg-item unread">
                <div class="msg-ava" style="background:#3b82f6">FA</div>
                <div class="msg-content">
                    <div class="msg-title">Dr. Fatuma Ally</div>
                    <div class="msg-preview">Your assignment on network protocols has been graded. Check your results.</div>
                </div>
                <div class="msg-time">10:30 AM</div>
            </div>
            <div class="msg-item unread">
                <div class="msg-ava" style="background:#22c55e">JK</div>
                <div class="msg-content">
                    <div class="msg-title">James Kimaro</div>
                    <div class="msg-preview">The Python project is due Friday. Let me know if you need help.</div>
                </div>
                <div class="msg-time">Yesterday</div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header"><span class="card-title">Notifications Settings</span></div>
        <div class="card-body">
            <div style="display:flex;flex-direction:column;gap:10px">
                <div class="flex-between" style="padding:10px 0;border-bottom:1px solid var(--border)"><span style="font-size:13.5px">Email Notifications</span><label class="toggle"><input type="checkbox" checked><span class="toggle-slider"></span></label></div>
                <div class="flex-between" style="padding:10px 0;border-bottom:1px solid var(--border)"><span style="font-size:13.5px">SMS Alerts (Tanzania)</span><label class="toggle"><input type="checkbox" checked><span class="toggle-slider"></span></label></div>
                <div class="flex-between" style="padding:10px 0;border-bottom:1px solid var(--border)"><span style="font-size:13.5px">WhatsApp Updates</span><label class="toggle"><input type="checkbox"><span class="toggle-slider"></span></label></div>
                <div class="flex-between" style="padding:10px 0;border-bottom:1px solid var(--border)"><span style="font-size:13.5px">Push Notifications</span><label class="toggle"><input type="checkbox" checked><span class="toggle-slider"></span></label></div>
            </div>
            <div class="info-box info" style="margin-top:16px"><i class="fa-brands fa-whatsapp" style="color:#25D366"></i><p>Click the WhatsApp button above to chat with support directly. Available Mon–Sat, 8 AM–8 PM EAT.</p></div>
        </div>
    </div>
</div>
@endsection
