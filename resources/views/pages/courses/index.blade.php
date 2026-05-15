@extends('layouts.app')

@section('title', 'Course Catalog – Jezdan Digital Academy')
@section('page_title', 'Course Catalog')

@section('content')
<div class="section-header">
    <div><h2>Course Catalog</h2><p>Browse {{ $courses->count() }} professionally certified ICT & Business courses</p></div>
    <div style="display:flex;gap:10px;">
        <div class="search-bar" style="width:200px"><i class="fa-solid fa-magnifying-glass"></i><input type="text" placeholder="Search…" id="courseSearch"></div>
        <select class="form-control" style="width:160px;" id="categoryFilter">
            <option value="">All Categories</option>
            @foreach($categories as $category)
                <option value="{{ $category->slug }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
</div>

<!-- CATEGORY TABS -->
<div style="display:flex;gap:8px;flex-wrap:wrap;margin-bottom:20px;">
    <span class="badge badge-orange" style="padding:7px 16px;cursor:pointer;font-size:12.5px">All ({{ $courses->count() }})</span>
    @foreach($categories as $category)
        <span class="badge badge-{{ $category->color }}" style="padding:7px 16px;cursor:pointer;font-size:12.5px">{{ $category->icon }} {{ $category->name }} ({{ $category->courses_count ?? 0 }})</span>
    @endforeach
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
    @foreach($courses as $course)
        @include('components.course-card', [
            'title' => $course->title,
            'category' => $course->category->name,
            'icon' => $course->icon,
            'bg' => $course->bg_color,
            'price' => $course->price,
            'oldPrice' => $course->old_price,
            'progress' => 0, // In real app, check enrollment
            'modules' => $course->modules_count,
            'lessons' => $course->lessons_count,
            'rating' => $course->rating,
            'students' => $course->students_count,
            'enrolled' => false // In real app, check enrollment
        ])
    @endforeach
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
