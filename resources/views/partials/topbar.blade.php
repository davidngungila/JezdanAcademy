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
        <div class="profile-chip" onclick="navigateTo('/settings')">
            <div class="ava">JD</div>
            <span>John Doe</span>
            <i class="fa-solid fa-chevron-down" style="font-size:10px;color:var(--text-muted)"></i>
        </div>
    </div>
</header>
