<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Jezdan Digital Academy – ICT Learning & Certification Platform')</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;1,9..40,400&display=swap" rel="stylesheet">
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
        a{text-decoration:none;color:inherit;}
        
        .container { max-width: 1200px; margin: 0 auto; padding: 0 24px; }
        
        /* Navbar */
        nav {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            height: 90px;
            display: flex;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }
        nav.scrolled {
            height: 70px;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        .nav-content { display: flex; align-items: center; justify-content: space-between; width: 100%; }
        .logo { 
            display: flex; 
            align-items: center; 
            gap: 12px; 
            font-weight: 800; 
            font-size: 22px; 
            color: var(--primary); 
            transition: var(--transition);
        }
        .logo img {
            height: 45px;
            width: auto;
            object-fit: contain;
        }
        .logo-icon { 
            width: 44px; 
            height: 44px; 
            background: var(--accent-gradient); 
            color: white; 
            border-radius: 12px; 
            display: flex; 
            align-items: center; 
            justify-content: center;
            box-shadow: 0 4px 15px rgba(245, 132, 52, 0.3);
        }
        .nav-links { display: flex; gap: 40px; align-items: center; }
        .nav-link { 
            font-weight: 600; 
            font-size: 15px; 
            color: var(--primary); 
            transition: var(--transition);
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent);
            transition: var(--transition);
        }
        .nav-link:hover { color: var(--accent); }
        .nav-link:hover::after { width: 100%; }
        
        .btn { padding: 12px 28px; border-radius: 12px; font-weight: 700; font-size: 15px; transition: var(--transition); cursor: pointer; border: none; }
        .btn-primary { background: var(--accent-gradient); color: white; box-shadow: 0 4px 15px rgba(245, 132, 52, 0.2); }
        .btn-primary:hover { transform: translateY(-3px); box-shadow: 0 8px 25px rgba(245, 132, 52, 0.3); }
        .btn-outline { border: 2px solid var(--accent); color: var(--accent); background: transparent; }
        .btn-outline:hover { background: var(--accent); color: white; }

        /* Responsive Guest Layout */
        @media (max-width: 768px) {
            nav { height: 70px; }
            .nav-links { 
                display: none; 
                position: absolute; 
                top: 70px; 
                left: 0; 
                right: 0; 
                background: white; 
                flex-direction: column; 
                padding: 30px; 
                border-bottom: 1px solid var(--border);
                gap: 24px;
                box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            }
            .nav-links.open { display: flex; }
            .mobile-menu-toggle { display: block !important; font-size: 24px; color: var(--primary); cursor: pointer; }
            .logo span { font-size: 18px; }
            .container { padding: 0 20px; }
        }

        .mobile-menu-toggle { display: none; }

        @yield('styles')
    </style>
</head>
<body>
    <nav id="mainNav">
        <div class="container nav-content">
            <a href="/" class="logo">
                <img src="https://via.placeholder.com/150x50?text=JEZDAN+ACADEMY" alt="Jezdan Academy Logo">
                {{-- <div class="logo-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                <span>Jezdan Academy</span> --}}
            </a>
            <div class="mobile-menu-toggle" onclick="toggleGuestMenu()"><i class="fa-solid fa-bars-staggered"></i></div>
            <div class="nav-links" id="guestNavLinks">
                <a href="/#courses" class="nav-link">Courses</a>
                <a href="/#features" class="nav-link">Features</a>
                <a href="/#about" class="nav-link">About</a>
                <a href="/login" class="nav-link">Login</a>
                <a href="/register" class="btn btn-primary">Join for Free</a>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer style="background: var(--primary); color: white; padding: 100px 0 40px;">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 60px; margin-bottom: 80px;">
                <div style="max-width: 300px;">
                    <div class="logo" style="color: white; margin-bottom: 30px;">
                        <img src="https://via.placeholder.com/150x50?text=JEZDAN+ACADEMY" alt="Jezdan Academy Logo" style="filter: brightness(0) invert(1);">
                    </div>
                    <p style="color: rgba(255,255,255,0.5); font-size: 15px; line-height: 1.8;">Leading ICT Certification Hub in Africa. Empowering the next generation of digital professionals through innovation and expert-led training.</p>
                </div>
                <div>
                    <h4 style="margin-bottom: 30px; font-size: 18px; font-weight: 700;">Quick Links</h4>
                    <ul style="list-style: none; display: flex; flex-direction: column; gap: 16px; font-size: 15px;">
                        <li><a href="/#courses" style="color: rgba(255,255,255,0.6); transition: 0.3s;" onmouseover="this.style.color='#f58434'" onmouseout="this.style.color='rgba(255,255,255,0.6)'">Featured Courses</a></li>
                        <li><a href="/#features" style="color: rgba(255,255,255,0.6); transition: 0.3s;" onmouseover="this.style.color='#f58434'" onmouseout="this.style.color='rgba(255,255,255,0.6)'">Why Choose Us</a></li>
                        <li><a href="/#about" style="color: rgba(255,255,255,0.6); transition: 0.3s;" onmouseover="this.style.color='#f58434'" onmouseout="this.style.color='rgba(255,255,255,0.6)'">About Academy</a></li>
                    </ul>
                </div>
                <div>
                    <h4 style="margin-bottom: 30px; font-size: 18px; font-weight: 700;">Support</h4>
                    <ul style="list-style: none; display: flex; flex-direction: column; gap: 16px; font-size: 15px;">
                        <li><a href="#" style="color: rgba(255,255,255,0.6); transition: 0.3s;" onmouseover="this.style.color='#f58434'" onmouseout="this.style.color='rgba(255,255,255,0.6)'">Help Center</a></li>
                        <li><a href="#" style="color: rgba(255,255,255,0.6); transition: 0.3s;" onmouseover="this.style.color='#f58434'" onmouseout="this.style.color='rgba(255,255,255,0.6)'">Terms of Service</a></li>
                        <li><a href="#" style="color: rgba(255,255,255,0.6); transition: 0.3s;" onmouseover="this.style.color='#f58434'" onmouseout="this.style.color='rgba(255,255,255,0.6)'">Privacy Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h4 style="margin-bottom: 30px; font-size: 18px; font-weight: 700;">Connect</h4>
                    <p style="color: rgba(255,255,255,0.5); font-size: 14px; margin-bottom: 24px;">Follow us on social media for latest updates and tech news.</p>
                    <div style="display: flex; gap: 20px; font-size: 24px;">
                        <a href="#" style="color: rgba(255,255,255,0.4); transition: 0.3s;" onmouseover="this.style.color='#f58434'" onmouseout="this.style.color='rgba(255,255,255,0.4)'"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" style="color: rgba(255,255,255,0.4); transition: 0.3s;" onmouseover="this.style.color='#f58434'" onmouseout="this.style.color='rgba(255,255,255,0.4)'"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" style="color: rgba(255,255,255,0.4); transition: 0.3s;" onmouseover="this.style.color='#f58434'" onmouseout="this.style.color='rgba(255,255,255,0.4)'"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#" style="color: rgba(255,255,255,0.4); transition: 0.3s;" onmouseover="this.style.color='#f58434'" onmouseout="this.style.color='rgba(255,255,255,0.4)'"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div style="border-top: 1px solid rgba(255,255,255,0.08); padding-top: 40px; text-align: center; color: rgba(255,255,255,0.3); font-size: 14px; letter-spacing: 0.5px;">
                &copy; 2026 Jezdan Digital Academy. Crafted with passion for Africa's tech future.
            </div>
        </div>
    </footer>

    <script>
        function toggleGuestMenu() {
            const nav = document.getElementById('guestNavLinks');
            if (nav) nav.classList.toggle('open');
        }

        window.addEventListener('scroll', function() {
            const nav = document.getElementById('mainNav');
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
