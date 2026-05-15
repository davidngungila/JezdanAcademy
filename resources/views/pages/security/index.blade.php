@extends('layouts.app')

@section('title', 'Security – Jezdan Digital Academy')
@section('page_title', 'Security & Access')

@section('content')
<div class="section-header"><div><h2>Security & Access</h2><p>Role-based access control and activity logs</p></div></div>
<div class="grid-2 mb-24">
    <div class="card">
        <div class="card-header"><span class="card-title">Role-Based Access</span></div>
        <div class="card-body">
            <div style="display:flex;flex-direction:column;gap:12px">
                <div class="flex-between" style="padding:11px;background:var(--bg);border-radius:10px;border:1px solid var(--border)"><div><strong style="font-size:13px">Admin Panel</strong><p style="font-size:12px;color:var(--text-muted)">Full platform management</p></div><label class="toggle"><input type="checkbox" checked><span class="toggle-slider"></span></label></div>
                <div class="flex-between" style="padding:11px;background:var(--bg);border-radius:10px;border:1px solid var(--border)"><div><strong style="font-size:13px">Course Creation</strong><p style="font-size:12px;color:var(--text-muted)">Instructor privileges</p></div><label class="toggle"><input type="checkbox" checked><span class="toggle-slider"></span></label></div>
                <div class="flex-between" style="padding:11px;background:var(--bg);border-radius:10px;border:1px solid var(--border)"><div><strong style="font-size:13px">Two-Factor Auth (2FA)</strong><p style="font-size:12px;color:var(--text-muted)">SMS/Auth app required</p></div><label class="toggle"><input type="checkbox" checked><span class="toggle-slider"></span></label></div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header"><span class="card-title">Login Session Log</span></div>
        <div class="card-body">
            <div class="ip-row">
                <div class="ip-status ok" style="width:8px;height:8px;border-radius:50%;background:var(--success)"></div>
                <div style="flex:1">
                    <div style="font-size:13px;font-weight:600;font-family:monospace">197.156.14.88</div>
                    <div style="font-size:11px;color:var(--text-muted)">Chrome/Windows · Dar es Salaam, TZ</div>
                </div>
                <span class="badge badge-green">Safe</span>
            </div>
            <div class="ip-row" style="margin-top:10px">
                <div class="ip-status warn" style="width:8px;height:8px;border-radius:50%;background:var(--warning)"></div>
                <div style="flex:1">
                    <div style="font-size:13px;font-weight:600;font-family:monospace">41.222.185.9</div>
                    <div style="font-size:11px;color:var(--text-muted)">Safari/iPhone · Nairobi, Kenya</div>
                </div>
                <span class="badge badge-orange">Suspicious</span>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header"><span class="card-title">Active Sessions</span><button class="btn btn-sm" style="background:var(--danger);color:#fff;border:none" onclick="showToast('All other sessions terminated','fa-shield-halved')">Terminate All Others</button></div>
    <div class="table-wrap"><table><thead><tr><th>Device</th><th>Location</th><th>IP Address</th><th>Last Active</th><th>Action</th></tr></thead>
    <tbody>
        <tr><td><i class="fa-solid fa-desktop" style="color:var(--accent)"></i> Desktop – Chrome</td><td>Dar es Salaam, TZ</td><td>197.156.xx.xx</td><td>Now</td><td><span class="badge badge-green">Current</span></td></tr>
        <tr><td><i class="fa-solid fa-mobile-screen" style="color:var(--info)"></i> Android – Firefox</td><td>Arusha, TZ</td><td>197.250.xx.xx</td><td>2h ago</td><td><button class="btn btn-sm" style="background:var(--danger);color:#fff;border:none" onclick="showToast('Session terminated','fa-lock')">Revoke</button></td></tr>
    </tbody></table></div>
</div>
@endsection
