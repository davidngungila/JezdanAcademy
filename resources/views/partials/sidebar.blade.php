@php
    $role = request('role', 'student'); // Simulation: in real app, use auth()->user()->role
@endphp

<aside class="sidebar" id="sidebar">
    <div class="sidebar-logo">
        <div class="sidebar-logo-icon"><i class="fa-solid fa-graduation-cap"></i></div>
        <div class="sidebar-logo-text">
            <h3>Jezdan Academy</h3>
            <span>ICT Platform Africa</span>
        </div>
    </div>

    <div class="sidebar-nav">
        <div class="sidebar-section">Main</div>
        <a href="/dashboard?role={{ $role }}" class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <i class="fa-solid fa-house"></i> Dashboard
        </a>

        @if($role == 'student' || $role == 'admin')
        <a href="/courses?role={{ $role }}" class="nav-item {{ request()->is('courses*') ? 'active' : '' }}">
            <i class="fa-solid fa-book-open"></i> Courses <span class="badge">47</span>
        </a>
        <a href="/my-learning?role={{ $role }}" class="nav-item {{ request()->is('my-learning*') ? 'active' : '' }}">
            <i class="fa-solid fa-play-circle"></i> My Learning
        </a>
        <a href="/exams?role={{ $role }}" class="nav-item {{ request()->is('exams*') ? 'active' : '' }}">
            <i class="fa-solid fa-clipboard-question"></i> Exams & Quizzes
        </a>
        @endif

        @if($role == 'student' || $role == 'admin')
        <div class="sidebar-section">Certificates</div>
        <a href="/certificates?role={{ $role }}" class="nav-item {{ request()->is('certificates*') ? 'active' : '' }}">
            <i class="fa-solid fa-award"></i> My Certificates
        </a>
        <a href="/library?role={{ $role }}" class="nav-item {{ request()->is('library*') ? 'active' : '' }}">
            <i class="fa-solid fa-folder-open"></i> Content Library
        </a>
        <a href="/live-sessions?role={{ $role }}" class="nav-item {{ request()->is('live-sessions*') ? 'active' : '' }}">
            <i class="fa-solid fa-video"></i> Live Sessions <span class="badge green">LIVE</span>
        </a>
        @endif

        @if($role == 'instructor' || $role == 'admin')
        <div class="sidebar-section">Management</div>
        <a href="/instructor?role={{ $role }}" class="nav-item {{ request()->is('instructor*') ? 'active' : '' }}">
            <i class="fa-solid fa-chalkboard-teacher"></i> Instructor Panel
        </a>
        @endif

        @if($role == 'admin')
        <a href="/admin?role={{ $role }}" class="nav-item {{ request()->is('admin*') ? 'active' : '' }}">
            <i class="fa-solid fa-shield-halved"></i> Admin Panel
        </a>
        @endif

        @if($role == 'org_manager' || $role == 'admin')
        <a href="/organizations?role={{ $role }}" class="nav-item {{ request()->is('organizations*') ? 'active' : '' }}">
            <i class="fa-solid fa-building"></i> Organizations
        </a>
        @endif

        @if($role == 'instructor' || $role == 'admin' || $role == 'org_manager')
        <a href="/analytics?role={{ $role }}" class="nav-item {{ request()->is('analytics*') ? 'active' : '' }}">
            <i class="fa-solid fa-chart-line"></i> Analytics
        </a>
        @endif

        <div class="sidebar-section">Community</div>
        <a href="/messages?role={{ $role }}" class="nav-item {{ request()->is('messages*') ? 'active' : '' }}">
            <i class="fa-solid fa-comments"></i> Messages <span class="badge">4</span>
        </a>
        <a href="/ai-tutor?role={{ $role }}" class="nav-item {{ request()->is('ai-tutor*') ? 'active' : '' }}">
            <i class="fa-solid fa-robot"></i> AI Tutor
        </a>
        <a href="/leaderboard?role={{ $role }}" class="nav-item {{ request()->is('leaderboard*') ? 'active' : '' }}">
            <i class="fa-solid fa-trophy"></i> Leaderboard
        </a>
        <a href="/achievements?role={{ $role }}" class="nav-item {{ request()->is('achievements*') ? 'active' : '' }}">
            <i class="fa-solid fa-medal"></i> Badges & Streaks
        </a>

        <div class="sidebar-section">Account</div>
        <a href="/payments?role={{ $role }}" class="nav-item {{ request()->is('payments*') ? 'active' : '' }}">
            <i class="fa-solid fa-credit-card"></i> Payments
        </a>
        <a href="/security?role={{ $role }}" class="nav-item {{ request()->is('security*') ? 'active' : '' }}">
            <i class="fa-solid fa-lock"></i> Security
        </a>
        <a href="/settings?role={{ $role }}" class="nav-item {{ request()->is('settings*') ? 'active' : '' }}">
            <i class="fa-solid fa-gear"></i> Settings
        </a>
    </div>
</aside>
<div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>
