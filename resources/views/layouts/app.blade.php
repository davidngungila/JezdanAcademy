<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Jezdan Digital Academy – ICT Learning & Certification Platform')</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;1,9..40,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.min.js"></script>
    <style>
        :root {
            --primary: #0b1f3a;
            --accent: #f58434;
            --accent-light: #ffa55e;
            --accent-pale: #fff3e8;
            --white: #ffffff;
            --bg: #f8f9fb;
            --card: #ffffff;
            --text: #1a2535;
            --text-muted: #6b7a90;
            --border: #e8ecf2;
            --sidebar-width: 260px;
            --header-h: 64px;
            --success: #22c55e;
            --warning: #f59e0b;
            --danger: #ef4444;
            --info: #3b82f6;
            --shadow: 0 4px 24px rgba(11,31,58,0.08);
            --shadow-lg: 0 8px 40px rgba(11,31,58,0.14);
            --radius: 14px;
            --radius-sm: 8px;
            --transition: all 0.22s cubic-bezier(.4,0,.2,1);
        }
        [data-theme="dark"] {
            --bg: #0d1929;
            --card: #122040;
            --text: #e8edf5;
            --text-muted: #8a9ab5;
            --border: #1e3459;
            --white: #122040;
            --shadow: 0 4px 24px rgba(0,0,0,0.3);
            --accent-pale: rgba(245,132,52,0.12);
        }

        *{margin:0;padding:0;box-sizing:border-box;}
        body{font-family:'DM Sans',sans-serif;background:var(--bg);color:var(--text);transition:var(--transition);overflow-x:hidden;}
        a{text-decoration:none;color:inherit;}
        button{cursor:pointer;border:none;outline:none;font-family:'DM Sans',sans-serif;}
        input,select,textarea{font-family:'DM Sans',sans-serif;outline:none;}

        /* ─── SCROLLBAR ─── */
        ::-webkit-scrollbar{width:5px;height:5px;}
        ::-webkit-scrollbar-track{background:transparent;}
        ::-webkit-scrollbar-thumb{background:var(--border);border-radius:10px;}

        /* Sidebar, Header, Content, etc. Styles (Simplified for brevity in layout) */
        @include('partials.styles')
        
        @stack('styles')
    </style>
</head>
<body>

<!-- TOP LOADER -->
<div class="top-loader" id="topLoader"></div>

<!-- APP SHELL -->
<div id="appShell" class="visible">
    @include('partials.sidebar')

    <!-- MAIN WRAPPER -->
    <div class="main-wrap">
        @include('partials.announcement')
        @include('partials.topbar')

        <!-- CONTENT -->
        <main class="content">
            @yield('content')
        </main>
    </div>
</div>

@include('partials.modals')

<script>
    // Global Scripts (Theme, Sidebar, Loader, Toast, Modals)
    @include('partials.scripts')
</script>

@stack('scripts')

</body>
</html>
