<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Auth – Jezdan Digital Academy')</title>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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

        *{margin:0;padding:0;box-sizing:border-box;}
        body{font-family:'DM Sans',sans-serif;background:var(--bg);color:var(--text);transition:var(--transition);overflow-x:hidden;}
        h1,h2,h3,h4,h5{font-family:'Syne',sans-serif;}
        a{text-decoration:none;color:inherit;}
        button{cursor:pointer;border:none;outline:none;font-family:'DM Sans',sans-serif;}
        input,select,textarea{font-family:'DM Sans',sans-serif;outline:none;}

        /* ─── AUTH SCREEN ─── */
        #authScreen{position:fixed;inset:0;z-index:9999;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,#0b1f3a 0%,#1a3a6e 60%,#0b1f3a 100%);}
        #authScreen::before{content:'';position:absolute;inset:0;background:url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23f58434' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");pointer-events:none;}
        .auth-box{background:rgba(255,255,255,0.06);backdrop-filter:blur(20px);border:1px solid rgba(255,255,255,0.12);border-radius:24px;padding:48px 44px;width:100%;max-width:480px;position:relative;z-index:1;}
        .auth-logo{display:flex;align-items:center;gap:12px;margin-bottom:32px;}
        .auth-logo-icon{width:48px;height:48px;background:var(--accent);border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:22px;color:#fff;}
        .auth-logo h2{font-size:20px;color:#fff;font-weight:800;}
        .auth-logo span{font-size:11px;color:rgba(255,255,255,0.5);display:block;font-family:'DM Sans',sans-serif;font-weight:400;letter-spacing:1px;text-transform:uppercase;}
        .auth-tabs{display:flex;background:rgba(255,255,255,0.08);border-radius:10px;padding:4px;margin-bottom:28px;}
        .auth-tab{flex:1;padding:9px;text-align:center;color:rgba(255,255,255,0.55);font-size:14px;font-weight:500;border-radius:7px;cursor:pointer;transition:var(--transition);}
        .auth-tab.active{background:var(--accent);color:#fff;}
        .auth-field{margin-bottom:18px;}
        .auth-field label{display:block;color:rgba(255,255,255,0.65);font-size:13px;margin-bottom:7px;font-weight:500;}
        .auth-field input,.auth-field select{width:100%;padding:12px 15px;background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.14);border-radius:10px;color:#fff;font-size:14px;transition:var(--transition);}
        .auth-field input::placeholder{color:rgba(255,255,255,0.35);}
        .auth-field input:focus,.auth-field select:focus{border-color:var(--accent);background:rgba(245,132,52,0.08);}
        .auth-field select option{background:#0b1f3a;color:#fff;}
        .auth-btn{width:100%;padding:14px;background:var(--accent);color:#fff;border-radius:10px;font-size:15px;font-weight:700;letter-spacing:.3px;transition:var(--transition);margin-top:8px;}
        .auth-btn:hover{background:var(--accent-light);transform:translateY(-1px);}
        .auth-divider{text-align:center;color:rgba(255,255,255,0.3);font-size:13px;margin:18px 0;}
        .social-btns{display:flex;gap:10px;}
        .social-btn{flex:1;padding:11px;border:1px solid rgba(255,255,255,0.15);border-radius:9px;color:rgba(255,255,255,0.75);font-size:13px;background:rgba(255,255,255,0.05);display:flex;align-items:center;justify-content:center;gap:8px;transition:var(--transition);cursor:pointer;}
        .social-btn:hover{border-color:var(--accent);color:var(--accent);}
        .role-pills{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:18px;}
        .role-pill{padding:6px 14px;border-radius:30px;border:1px solid rgba(255,255,255,0.2);color:rgba(255,255,255,0.65);font-size:12px;cursor:pointer;transition:var(--transition);}
        .role-pill.active{background:var(--accent);border-color:var(--accent);color:#fff;}
        .auth-skip{text-align:center;margin-top:18px;color:rgba(255,255,255,0.45);font-size:13px;}
        .auth-skip a{color:var(--accent);font-weight:600;cursor:pointer;}
    </style>
</head>
<body>

<div id="authScreen">
    <div class="auth-box">
        <div class="auth-logo">
            <a href="/" style="display: flex; align-items: center; gap: 12px;">
                <div class="auth-logo-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                <div class="auth-logo-text">
                    <h2>Jezdan Digital Academy</h2>
                    <span>ICT Certification Hub Africa</span>
                </div>
            </a>
        </div>
        @yield('content')
    </div>
</div>

<script>
    function switchAuthTab(tab) {
        if (tab === 'login') {
            window.location.href = '/login';
        } else {
            window.location.href = '/register';
        }
    }
    
    function selectRole(el, role) {
        document.querySelectorAll('.role-pill').forEach(p=>p.classList.remove('active'));
        el.classList.add('active');
    }
    
    function doLogin() {
        window.location.href = '/dashboard';
    }
</script>

</body>
</html>
