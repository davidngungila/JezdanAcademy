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
        <div class="icon-btn" onclick="navigateTo('/messages')"><i class="fa-regular fa-envelope"></i><span class="dot"></span></div>
        <div class="theme-toggle" onclick="toggleTheme()" title="Toggle dark mode"><i class="fa-solid fa-moon" id="themeIcon"></i></div>
        <div class="profile-container">
            <div class="profile-chip" onclick="toggleProfileMenu(event)">
                <div class="ava">JD</div>
                <span>John Doe</span>
                <i class="fa-solid fa-chevron-down" style="font-size:10px;color:var(--text-muted)"></i>
            </div>
            <div class="profile-dropdown" id="profileDropdown">
                <div class="dropdown-header">
                    <strong>John Doe</strong>
                    <span>john.doe@jezdan.co.tz</span>
                </div>
                <div class="dropdown-divider"></div>
                <a href="/settings" class="dropdown-item"><i class="fa-regular fa-user"></i> Profile</a>
                <a href="/security" class="dropdown-item"><i class="fa-solid fa-shield-halved"></i> Account</a>
                <a href="/settings" class="dropdown-item"><i class="fa-solid fa-gear"></i> Setting</a>
                <div class="dropdown-divider"></div>
                <a href="/login" class="dropdown-item logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
            </div>
        </div>
    </div>
</header>
