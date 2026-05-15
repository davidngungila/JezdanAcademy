@extends('layouts.guest')

@section('title', 'Welcome to Jezdan Digital Academy')

@section('styles')
<style>
    /* Hero Section */
    .hero {
        padding: 100px 0;
        background: linear-gradient(135deg, var(--primary) 0%, #1a3a6e 100%);
        color: white;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    .hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23f58434' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        opacity: 0.3;
    }
    .hero-content { position: relative; z-index: 1; max-width: 800px; margin: 0 auto; }
    .hero h1 { font-size: 56px; font-weight: 800; line-height: 1.1; margin-bottom: 24px; }
    .hero p { font-size: 20px; color: rgba(255,255,255,0.8); margin-bottom: 40px; }
    
    /* Stats Section */
    .stats-bar {
        background: white;
        padding: 40px 0;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        margin-top: -50px;
        position: relative;
        z-index: 10;
        border-radius: 20px;
        display: flex;
        justify-content: space-around;
        text-align: center;
    }
    .stat-item h3 { font-size: 32px; color: var(--accent); margin-bottom: 4px; }
    .stat-item p { font-size: 14px; color: var(--text-muted); font-weight: 600; }

    /* Features Section */
    .section { padding: 100px 0; }
    .section-title { text-align: center; margin-bottom: 64px; }
    .section-title h2 { font-size: 40px; color: var(--primary); margin-bottom: 16px; }
    .section-title p { color: var(--text-muted); font-size: 18px; max-width: 600px; margin: 0 auto; }

    .feature-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 32px; }
    .feature-card {
        background: white;
        padding: 40px;
        border-radius: 20px;
        border: 1px solid var(--border);
        transition: var(--transition);
    }
    .feature-card:hover { transform: translateY(-10px); box-shadow: 0 20px 40px rgba(0,0,0,0.05); border-color: var(--accent); }
    .feature-icon { width: 64px; height: 64px; background: var(--accent-pale); color: var(--accent); border-radius: 16px; display: flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 24px; }
    .feature-card h3 { margin-bottom: 16px; font-size: 22px; }
    
    /* CTA Section */
    .cta {
        background: var(--accent);
        color: white;
        padding: 80px 0;
        border-radius: 30px;
        text-align: center;
        margin: 100px 0;
    }
    .cta h2 { font-size: 36px; margin-bottom: 24px; }
    .cta p { font-size: 18px; margin-bottom: 40px; opacity: 0.9; }
    .btn-white { background: white; color: var(--accent); }
    .btn-white:hover { background: var(--bg); transform: scale(1.05); }

    /* Responsive Landing Page */
    @media (max-width: 768px) {
        .hero h1 { font-size: 36px; }
        .hero p { font-size: 16px; }
        .stats-bar { flex-direction: column; gap: 24px; margin-top: -30px; }
        .section { padding: 60px 0; }
        .section-title h2 { font-size: 32px; }
        .hero { padding: 60px 0 100px; }
    }

</style>
@endsection

@section('content')
    <section class="hero">
        <div class="container hero-content">
            <h1>Master Your Future in ICT & Cybersecurity</h1>
            <p>Jezdan Digital Academy provides world-class certification training for Africa's future tech leaders. CompTIA, Python, Cloud, and more.</p>
            <div style="display: flex; gap: 20px; justify-content: center;">
                <a href="/register" class="btn btn-primary" style="padding: 16px 40px; font-size: 18px;">Start Learning Free</a>
                <a href="/courses" class="btn btn-outline" style="padding: 16px 40px; font-size: 18px; color: white; border-color: white;">View Catalog</a>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="stats-bar">
            <div class="stat-item"><h3>10k+</h3><p>Active Students</p></div>
            <div class="stat-item"><h3>47+</h3><p>Expert Courses</p></div>
            <div class="stat-item"><h3>92%</h3><p>Pass Rate</p></div>
            <div class="stat-item"><h3>15+</h3><p>Global Partners</p></div>
        </div>
    </div>

    <section id="features" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Jezdan Academy?</h2>
                <p>We combine cutting-edge technology with industry expertise to deliver the best learning experience.</p>
            </div>
            <div class="feature-grid">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fa-solid fa-robot"></i></div>
                    <h3>AI-Powered Learning</h3>
                    <p>Our AI Tutor is available 24/7 to answer your questions and guide you through complex ICT concepts.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fa-solid fa-award"></i></div>
                    <h3>Global Certification</h3>
                    <p>Get prepared for world-recognized certifications from CompTIA, AWS, Cisco, and Microsoft.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fa-solid fa-building"></i></div>
                    <h3>Enterprise Solutions</h3>
                    <p>Tailored learning paths for organizations and government agencies to upskill their workforce.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="courses" class="section" style="background: rgba(11, 31, 58, 0.02);">
        <div class="container">
            <div class="section-title">
                <h2>Featured Courses</h2>
                <p>Start with our most popular industry-standard certification paths.</p>
            </div>
            <div class="course-grid">
                @include('components.course-card', [
                    'title' => 'CompTIA Security+ (SY0-701)',
                    'category' => 'Security',
                    'icon' => '🔒',
                    'bg' => '#0b1f3a',
                    'price' => 49,
                    'oldPrice' => 89,
                    'modules' => 12,
                    'lessons' => 87,
                    'rating' => 4.8,
                    'students' => 342,
                    'enrolled' => false
                ])
                @include('components.course-card', [
                    'title' => 'Python Programming Bootcamp',
                    'category' => 'ICT',
                    'icon' => '🐍',
                    'bg' => '#1e3a5f',
                    'free' => true,
                    'modules' => 8,
                    'lessons' => 64,
                    'rating' => 4.9,
                    'students' => 891,
                    'enrolled' => false
                ])
                @include('components.course-card', [
                    'title' => 'AWS Cloud Practitioner',
                    'category' => 'ICT',
                    'icon' => '☁️',
                    'bg' => '#1a5276',
                    'price' => 59,
                    'oldPrice' => 99,
                    'modules' => 10,
                    'lessons' => 73,
                    'rating' => 4.8,
                    'students' => 218,
                    'enrolled' => false
                ])
            </div>
            <div style="text-align: center; margin-top: 48px;">
                <a href="/courses" class="btn btn-outline">Explore All 47 Courses</a>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="cta">
            <h2>Ready to start your digital journey?</h2>
            <p>Join thousands of students across Africa mastering ICT and Cybersecurity today.</p>
            <a href="/register" class="btn btn-white" style="padding: 16px 48px; font-size: 18px;">Create Free Account</a>
        </div>
    </section>

@endsection
