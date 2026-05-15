@extends('layouts.app')

@section('title', 'Course Catalog – Jezdan Digital Academy')
@section('page_title', 'Course Catalog')

@section('content')
<div class="section-header">
    <div><h2>Course Catalog</h2><p>Browse 47 professionally certified ICT & Business courses</p></div>
    <div style="display:flex;gap:10px;">
        <div class="search-bar" style="width:200px"><i class="fa-solid fa-magnifying-glass"></i><input type="text" placeholder="Search…" id="courseSearch"></div>
        <select class="form-control" style="width:160px;" id="categoryFilter">
            <option value="">All Categories</option>
            <option>ICT</option><option>Security</option><option>Business</option><option>Finance</option>
        </select>
    </div>
</div>

<!-- CATEGORY TABS -->
<div style="display:flex;gap:8px;flex-wrap:wrap;margin-bottom:20px;">
    <span class="badge badge-orange" style="padding:7px 16px;cursor:pointer;font-size:12.5px">All (47)</span>
    <span class="badge badge-blue" style="padding:7px 16px;cursor:pointer;font-size:12.5px">🖥️ ICT (18)</span>
    <span class="badge badge-red" style="padding:7px 16px;cursor:pointer;font-size:12.5px">🔒 Security (12)</span>
    <span class="badge badge-green" style="padding:7px 16px;cursor:pointer;font-size:12.5px">💼 Business (9)</span>
    <span class="badge badge-purple" style="padding:7px 16px;cursor:pointer;font-size:12.5px">💰 Finance (8)</span>
</div>

<!-- COUPON BAR -->
<div class="info-box success mb-24">
    <i class="fa-solid fa-tag"></i>
    <div style="flex:1">
        <p><strong>Have a coupon?</strong> Enter code <strong>SKILLS40</strong> for 40% off any paid course!</p>
        <div class="coupon-box" style="margin-top:10px">
            <input class="coupon-input" placeholder="ENTER CODE" id="couponIn" maxlength="10">
            <button class="btn btn-primary btn-sm" onclick="applyCoupon()">Apply</button>
            <span id="couponMsg" style="font-size:13px;margin-left:8px;"></span>
        </div>
    </div>
</div>

<div class="course-grid">
    @include('components.course-card', [
        'title' => 'CompTIA Security+ (SY0-701)',
        'category' => 'Security',
        'icon' => '🔒',
        'bg' => '#0b1f3a',
        'price' => 49,
        'oldPrice' => 89,
        'progress' => 82,
        'modules' => 12,
        'lessons' => 87,
        'rating' => 4.8,
        'students' => 342,
        'enrolled' => true
    ])
    @include('components.course-card', [
        'title' => 'Python Programming Bootcamp',
        'category' => 'ICT',
        'icon' => '🐍',
        'bg' => '#1e3a5f',
        'free' => true,
        'progress' => 65,
        'modules' => 8,
        'lessons' => 64,
        'rating' => 4.9,
        'students' => 891,
        'enrolled' => true
    ])
    @include('components.course-card', [
        'title' => 'AWS Cloud Practitioner',
        'category' => 'ICT',
        'icon' => '☁️',
        'bg' => '#1a5276',
        'price' => 59,
        'oldPrice' => 99,
        'modules' => 10,
        'lessons' => 73,
        'rating' => 4.8,
        'students' => 218,
        'enrolled' => false
    ])
    <!-- More cards can be added here -->
</div>
@endsection

@push('scripts')
<script>
    function applyCoupon() {
        const v=document.getElementById('couponIn').value.toUpperCase();
        const msg=document.getElementById('couponMsg');
        if(v==='SKILLS40'){
            document.getElementById('couponIn').classList.add('valid');
            msg.innerHTML='<span style="color:var(--success)"><i class="fa-solid fa-check-circle"></i> 40% discount applied!</span>';
            showToast('Coupon SKILLS40 applied — 40% off!','fa-tag');
        } else {
            msg.innerHTML='<span style="color:var(--danger)"><i class="fa-solid fa-xmark-circle"></i> Invalid code</span>';
        }
    }
</script>
@endpush
