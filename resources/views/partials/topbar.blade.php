@php
    $role = request('role', 'student');
@endphp

<header class="topbar">
    <div class="topbar-left">
        <button class="menu-btn" onclick="toggleSidebar()"><i class="fa-solid fa-bars"></i></button>
        <h1 class="page-title" id="pageTitle">@yield('page_title', 'Dashboard')</h1>
    </div>
    <div class="search-bar">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" placeholder="Search courses, topics…" id="globalSearch">
    </div>
    <div class="topbar-right">
        <div class="icon-btn" onclick="showModal('notifModal')"><i class="fa-regular fa-bell"></i><span class="dot"></span></div>
        <div class="icon-btn" onclick="navigateTo('/messages?role={{ $role }}')"><i class="fa-regular fa-envelope"></i><span class="dot"></span></div>
        <div class="theme-toggle" onclick="toggleTheme()" title="Toggle dark mode"><i class="fa-solid fa-moon" id="themeIcon"></i></div>
        <div class="profile-container">
            <div class="profile-chip" onclick="toggleProfileMenu(event)">
                <div class="ava">
                    @if($role == 'student') JD
                    @elseif($role == 'instructor') JK
                    @elseif($role == 'admin') AD
                    @elseif($role == 'org_manager') TC
                    @endif
                </div>
                <span>
                    @if($role == 'student') John Doe
                    @elseif($role == 'instructor') James Kimaro
                    @elseif($role == 'admin') Admin User
                    @elseif($role == 'org_manager') TechCorp Manager
                    @endif
                </span>
                <i class="fa-solid fa-chevron-down" style="font-size:10px;color:var(--text-muted)"></i>
            </div>
            <div class="profile-dropdown" id="profileDropdown">
                <div class="dropdown-header">
                    <strong>
                        @if($role == 'student') John Doe
                        @elseif($role == 'instructor') James Kimaro
                        @elseif($role == 'admin') Admin User
                        @elseif($role == 'org_manager') TechCorp Manager
                        @endif
                    </strong>
                    <span>
                        @if($role == 'student') john.doe@jezdan.co.tz
                        @elseif($role == 'instructor') james.k@jezdan.co.tz
                        @elseif($role == 'admin') admin@jezdan.co.tz
                        @elseif($role == 'org_manager') manager@techcorp.co.tz
                        @endif
                    </span>
                    <span class="badge badge-orange" style="margin-top:8px; font-size:10px; text-transform:uppercase">{{ str_replace('_', ' ', $role) }}</span>
                </div>
                <div class="dropdown-divider"></div>
                <a href="/settings?role={{ $role }}" class="dropdown-item"><i class="fa-regular fa-user"></i> Profile</a>
                <a href="/security?role={{ $role }}" class="dropdown-item"><i class="fa-solid fa-shield-halved"></i> Account</a>
                <a href="/settings?role={{ $role }}" class="dropdown-item"><i class="fa-solid fa-gear"></i> Setting</a>
                <div class="dropdown-divider"></div>
                <a href="/login" class="dropdown-item logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
            </div>
        </div>
    </div>
</header>
