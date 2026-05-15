<div class="course-card">
    <div class="course-thumb" style="background: {{ $bg ?? '#0b1f3a' }}">
        <span style="font-size:48px">{{ $icon ?? '📚' }}</span>
        <span class="tag {{ ($free ?? false) ? 'free' : '' }}">{{ ($free ?? false) ? 'FREE' : 'PAID' }}</span>
        @if($enrolled ?? false)
            <span style="position:absolute;top:10px;left:10px;background:rgba(34,197,94,.9);border-radius:6px;padding:2px 8px;font-size:10px;font-weight:700;color:#fff"><i class="fa-solid fa-check"></i> Enrolled</span>
        @endif
    </div>
    <div class="course-card-body">
        <div style="margin-bottom:6px"><span class="badge badge-{{ ($category ?? '') === 'Security' ? 'red' : (($category ?? '') === 'ICT' ? 'blue' : (($category ?? '') === 'Finance' ? 'green' : 'purple')) }}">{{ $category ?? 'General' }}</span></div>
        <h4>{{ $title ?? 'Course Title' }}</h4>
        <div class="meta">
            <span><i class="fa-solid fa-layer-group"></i> {{ $modules ?? 0 }} Modules</span>
            <span><i class="fa-solid fa-play-circle"></i> {{ $lessons ?? 0 }} Lessons</span>
            <span><i class="fa-solid fa-star" style="color:#f59e0b"></i> {{ $rating ?? 0 }}</span>
        </div>
        @if($enrolled ?? false)
            <div class="progress-bar"><div class="progress-fill" style="width:{{ $progress ?? 0 }}%"></div></div>
            <div class="progress-label"><span>{{ ($progress ?? 0) === 100 ? '✅ Completed' : 'In Progress' }}</span><span>{{ $progress ?? 0 }}%</span></div>
        @else
            <p style="font-size:12px;color:var(--text-muted)"><i class="fa-solid fa-users"></i> {{ $students ?? 0 }} students enrolled</p>
        @endif
    </div>
    <div class="course-footer">
        <div class="price-tag">
            @if($free ?? false)
                <span style="color:var(--success);font-size:14px">FREE</span>
            @else
                ${{ $price ?? 0 }}<span class="old">${{ $oldPrice ?? 0 }}</span>
            @endif
        </div>
        @if($enrolled ?? false)
            <button class="btn btn-primary btn-sm" onclick="showToast('Opening course…','fa-play')"><i class="fa-solid fa-play"></i> Continue</button>
        @else
            <button class="btn btn-dark btn-sm" onclick="showModal('payModal')"><i class="fa-solid fa-cart-shopping"></i> Enroll</button>
        @endif
    </div>
</div>
