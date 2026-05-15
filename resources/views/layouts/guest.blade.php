<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Jezdan Digital Academy – ICT Learning & Certification Platform')</title>
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
            --text: #1a2535;
            --text-muted: #6b7a90;
            --border: #e8ecf2;
            --transition: all 0.22s cubic-bezier(.4,0,.2,1);
        }

        *{margin:0;padding:0;box-sizing:border-box;}
        body{font-family:'DM Sans',sans-serif;background:var(--bg);color:var(--text);line-height:1.6;}
        h1,h2,h3,h4,h5{font-family:'Syne',sans-serif;}
        a{text-decoration:none;color:inherit;}
        
        .container { max-width: 1200px; margin: 0 auto; padding: 0 24px; }
        
        /* Navbar */
        nav {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border);
            height: 80px;
            display: flex;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .nav-content { display: flex; align-items: center; justify-content: space-between; width: 100%; }
        .logo { display: flex; align-items: center; gap: 10px; font-weight: 800; font-size: 20px; color: var(--primary); }
        .logo-icon { width: 40px; height: 40px; background: var(--accent); color: white; border-radius: 10px; display: flex; align-items: center; justify-content: center; }
        .nav-links { display: flex; gap: 32px; align-items: center; }
        .nav-link { font-weight: 600; font-size: 15px; color: var(--text); transition: var(--transition); }
        .nav-link:hover { color: var(--accent); }
        
        .btn { padding: 12px 24px; border-radius: 10px; font-weight: 700; font-size: 15px; transition: var(--transition); cursor: pointer; border: none; }
        .btn-primary { background: var(--accent); color: white; }
        .btn-primary:hover { background: var(--accent-light); transform: translateY(-2px); }
        .btn-outline { border: 2px solid var(--accent); color: var(--accent); background: transparent; }
        .btn-outline:hover { background: var(--accent); color: white; }

        /* Responsive Guest Layout */
        @media (max-width: 768px) {
            nav { height: 70px; }
            .nav-links { display: none; } /* Hide links on mobile for simplicity in this static version */
            .logo span { font-size: 18px; }
            .container { padding: 0 16px; }
        }

        @yield('styles')
    </style>
</head>
<body>
    <nav>
        <div class="container nav-content">
            <a href="/" class="logo">
                <div class="logo-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                <span>Jezdan Academy</span>
            </a>
            <div class="nav-links">
                <a href="/#courses" class="nav-link">Courses</a>
                <a href="/#features" class="nav-link">Features</a>
                <a href="/#about" class="nav-link">About Us</a>
                <a href="/login" class="btn btn-outline">Login</a>
                <a href="/register" class="btn btn-primary">Join Free</a>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer style="background: var(--primary); color: white; padding: 64px 0 32px;">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 48px; margin-bottom: 48px;">
                <div>
                    <div class="logo" style="color: white; margin-bottom: 24px;">
                        <div class="logo-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                        <span>Jezdan Academy</span>
                    </div>
                    <p style="color: rgba(255,255,255,0.6); font-size: 14px;">Leading ICT Certification Hub in Africa. Empowering the next generation of digital professionals.</p>
                </div>
                <div>
                    <h4 style="margin-bottom: 24px;">Quick Links</h4>
                    <ul style="list-style: none; display: flex; flex-direction: column; gap: 12px; font-size: 14px; color: rgba(255,255,255,0.6);">
                        <li><a href="/#courses">Courses</a></li>
                        <li><a href="/#features">Features</a></li>
                        <li><a href="/#about">About Us</a></li>
                    </ul>
                </div>
                <div>
                    <h4 style="margin-bottom: 24px;">Support</h4>
                    <ul style="list-style: none; display: flex; flex-direction: column; gap: 12px; font-size: 14px; color: rgba(255,255,255,0.6);">
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Contact Support</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h4 style="margin-bottom: 24px;">Connect</h4>
                    <div style="display: flex; gap: 16px; font-size: 20px; color: rgba(255,255,255,0.6);">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 32px; text-align: center; color: rgba(255,255,255,0.4); font-size: 13px;">
                © 2026 Jezdan Digital Academy. All rights reserved.
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
