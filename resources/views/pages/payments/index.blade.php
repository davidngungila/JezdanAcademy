@extends('layouts.app')

@section('title', 'Payments – Jezdan Digital Academy')
@section('page_title', 'Payments & Subscriptions')

@section('content')
<div class="section-header"><div><h2>Payments & Subscriptions</h2><p>Manage your plan and billing</p></div></div>
<div class="plan-cards mb-24">
    <div class="plan-card">
        <div class="badge badge-green" style="margin-bottom:8px">Free</div>
        <h3>$0<span style="font-size:14px;font-weight:400">/mo</span></h3>
        <p>Basic access, 3 free courses</p>
        <ul class="features"><li>3 Free courses</li><li>Community forum</li><li>Basic certificate</li></ul>
    </div>
    <div class="plan-card popular selected">
        <div class="badge badge-orange" style="margin-bottom:8px">Pro Monthly</div>
        <h3>$29<span style="font-size:14px;font-weight:400">/mo</span></h3>
        <p>Full access, all features</p>
        <ul class="features"><li>All 47 courses</li><li>Live sessions</li><li>AI Tutor</li><li>PDF Certificates</li></ul>
    </div>
    <div class="plan-card">
        <div class="badge badge-purple" style="margin-bottom:8px">Pro Yearly</div>
        <h3>$299<span style="font-size:14px;font-weight:400">/yr</span></h3>
        <p>Save $49! Best value</p>
        <ul class="features"><li>Everything in Monthly</li><li>Priority support</li><li>Offline downloads</li><li>Team features</li></ul>
    </div>
</div>
<!-- BUNDLE OFFER -->
<div class="info-box success mb-24"><i class="fa-solid fa-box-open"></i><p><strong>🎁 Bundle Deal:</strong> Get 3 courses (Security+, Python, Networking) for just <strong>$99</strong> — Save $48! <button class="btn btn-primary btn-sm" style="margin-left:12px" onclick="showModal('payModal')">Get Bundle</button></p></div>
<div class="grid-2">
    <div class="card">
        <div class="card-header"><span class="card-title">Pay Now</span></div>
        <div class="card-body">
            <button class="mpesa-btn" onclick="showModal('mpesaModal')"><span class="logo">M-PESA</span><span>Pay with M-Pesa (Tanzania)</span><i class="fa-solid fa-mobile-screen-button" style="margin-left:auto"></i></button>
            <button class="btn btn-primary" style="width:100%;margin-bottom:10px" onclick="showModal('payModal')"><i class="fa-regular fa-credit-card"></i> Pay with Credit/Debit Card</button>
            <button class="btn btn-outline" style="width:100%" onclick="showToast('PayPal integration coming soon!','fa-paypal')"><i class="fa-brands fa-paypal"></i> Pay with PayPal</button>
        </div>
    </div>
    <div class="card">
        <div class="card-header"><span class="card-title">Payment History</span></div>
        <div class="table-wrap"><table><thead><tr><th>Description</th><th>Amount</th><th>Date</th><th>Status</th></tr></thead>
        <tbody>
            <tr><td>Pro Monthly Plan</td><td><strong>$29</td><td>May 1, 2026</td><td><span class="badge badge-green">Paid</span></td></tr>
            <tr><td>Security+ Course</td><td><strong>$49</td><td>Apr 1, 2026</td><td><span class="badge badge-green">Paid</span></td></tr>
            <tr><td>Python Bundle</td><td><strong>$99</td><td>Mar 15, 2026</td><td><span class="badge badge-green">Paid</span></td></tr>
        </tbody></table></div>
    </div>
</div>
@endsection
