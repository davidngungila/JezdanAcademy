@extends('layouts.guest')

@section('title', 'Jezdan Digital Academy – Master Your Future')

@section('styles')
<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #0b1f3a 0%, #1a3a6e 100%);
        --accent-gradient: linear-gradient(135deg, #f58434 0%, #ff9d5c 100%);
        --glass: rgba(255, 255, 255, 0.03);
        --glass-border: rgba(255, 255, 255, 0.1);
    }

    /* Animations */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }

    .animate-fade-in-up { animation: fadeInUp 0.8s cubic-bezier(0.4, 0, 0.2, 1) forwards; }
    .delay-1 { animation-delay: 0.2s; }
    .delay-2 { animation-delay: 0.4s; }

    /* Hero Section Redesign */
    .hero {
        min-height: 90vh;
        display: flex;
        align-items: center;
        background: var(--primary-gradient);
        color: white;
        position: relative;
        overflow: hidden;
        padding: 120px 0 160px;
    }

    .hero::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=2070') center/cover no-repeat;
        opacity: 0.15;
        z-index: 0;
    }

    .hero-container {
        position: relative;
        z-index: 1;
        display: grid;
        grid-template-columns: 1.2fr 0.8fr;
        gap: 60px;
        align-items: center;
    }

    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(245, 132, 52, 0.1);
        border: 1px solid rgba(245, 132, 52, 0.2);
        color: var(--accent);
        padding: 8px 16px;
        border-radius: 100px;
        font-weight: 600;
        font-size: 14px;
        margin-bottom: 24px;
        backdrop-filter: blur(4px);
    }

    .hero h1 {
        font-size: clamp(40px, 5vw, 64px);
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 24px;
        background: linear-gradient(to right, #fff, rgba(255,255,255,0.7));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hero p {
        font-size: clamp(18px, 2vw, 22px);
        color: rgba(255,255,255,0.8);
        margin-bottom: 40px;
        max-width: 600px;
        line-height: 1.6;
    }

    .hero-image {
        position: relative;
        animation: float 6s ease-in-out infinite;
    }

    .hero-image img {
        width: 100%;
        border-radius: 24px;
        box-shadow: 0 30px 60px rgba(0,0,0,0.3);
    }

    .hero-image::after {
        content: '';
        position: absolute;
        -inset: 20px;
        border: 2px solid var(--accent);
        border-radius: 24px;
        z-index: -1;
        opacity: 0.3;
    }

    /* Stats Floating Cards */
    .stats-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 24px;
        margin-top: -80px;
        position: relative;
        z-index: 10;
    }

    .stat-card {
        background: white;
        padding: 32px;
        border-radius: 24px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.06);
        text-align: center;
        transition: var(--transition);
        border: 1px solid var(--border);
    }

    .stat-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 60px rgba(0,0,0,0.1);
        border-color: var(--accent);
    }

    .stat-card h3 {
        font-size: 36px;
        color: var(--primary);
        margin-bottom: 8px;
        font-weight: 800;
    }

    .stat-card p {
        color: var(--text-muted);
        font-weight: 600;
        text-transform: uppercase;
        font-size: 13px;
        letter-spacing: 1px;
    }

    /* Section Headers */
    .section-header {
        text-align: center;
        margin-bottom: 60px;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }

    .section-badge {
        color: var(--accent);
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 14px;
        display: block;
        margin-bottom: 16px;
    }

    .section-header h2 {
        font-size: clamp(32px, 4vw, 42px);
        color: var(--primary);
        margin-bottom: 20px;
        font-weight: 800;
    }

    /* Advanced Grid */
    .feature-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 32px;
    }

    .feature-card {
        background: white;
        padding: 48px;
        border-radius: 32px;
        border: 1px solid var(--border);
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }

    .feature-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; width: 100%; height: 4px;
        background: var(--accent-gradient);
        transform: scaleX(0);
        transition: transform 0.4s ease;
        transform-origin: left;
    }

    .feature-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 30px 60px rgba(0,0,0,0.05);
    }

    .feature-card:hover::before { transform: scaleX(1); }

    .feature-icon {
        width: 70px;
        height: 70px;
        background: var(--accent-pale);
        color: var(--accent);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        margin-bottom: 32px;
        transition: 0.4s;
    }

    .feature-card:hover .feature-icon {
        background: var(--accent);
        color: white;
        transform: rotate(10deg);
    }

    /* Course Section Redesign */
    .course-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 32px;
    }

    /* Testimonials */
    .testimonial-section {
        background: #fdfdfd;
        padding: 100px 0;
    }

    .testimonial-card {
        background: white;
        padding: 40px;
        border-radius: 24px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.03);
        border: 1px solid var(--border);
    }

    .user-info {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-top: 24px;
    }

    .user-img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
    }

    /* CTA Redesign */
    .cta-container {
        background: var(--primary-gradient);
        border-radius: 40px;
        padding: 80px;
        text-align: center;
        color: white;
        position: relative;
        overflow: hidden;
        margin-top: 100px;
    }

    .cta-container::before {
        content: '';
        position: absolute;
        inset: 0;
        background: url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=2070') center/cover;
        opacity: 0.1;
    }

    /* Responsive Improvements */
    @media (max-width: 1024px) {
        .hero-container { grid-template-columns: 1fr; text-align: center; }
        .hero h1 { margin-left: auto; margin-right: auto; }
        .hero p { margin-left: auto; margin-right: auto; }
        .hero-image { display: none; }
        .stats-container { grid-template-columns: repeat(2, 1fr); }
        .feature-grid { grid-template-columns: repeat(2, 1fr); }
    }

    @media (max-width: 640px) {
        .stats-container { grid-template-columns: 1fr; }
        .feature-grid { grid-template-columns: 1fr; }
        .cta-container { padding: 40px 24px; }
        .course-grid { grid-template-columns: 1fr; }
    }
</style>
@endsection

@section('content')
    <section class="hero">
        <div class="container hero-container">
            <div class="hero-text animate-fade-in-up">
                <div class="hero-badge">
                    <i class="fa-solid fa-bolt"></i>
                    <span>Accelerate Your Tech Career</span>
                </div>
                <h1>Empowering Africa's Next <span style="color: var(--accent);">Digital Leaders</span></h1>
                <p>Join Jezdan Digital Academy and gain world-class ICT certifications. From Cybersecurity to AI, we provide the tools you need to succeed in the modern digital economy.</p>
                <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                    <a href="/register" class="btn btn-primary" style="padding: 18px 48px; font-size: 18px; display: flex; align-items: center; gap: 10px;">
                        Get Started for Free <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="/courses" class="btn btn-outline" style="padding: 18px 48px; font-size: 18px; color: white; border-color: rgba(255,255,255,0.3); background: rgba(255,255,255,0.05); backdrop-filter: blur(10px);">
                        Explore Courses
                    </a>
                </div>
                <div style="margin-top: 40px; display: flex; align-items: center; gap: 15px;">
                    <div style="display: flex; -margin-left: -10px;">
                        <img src="https://i.pravatar.cc/150?u=1" style="width: 40px; height: 40px; border-radius: 50%; border: 2px solid var(--primary);" alt="">
                        <img src="https://i.pravatar.cc/150?u=2" style="width: 40px; height: 40px; border-radius: 50%; border: 2px solid var(--primary); margin-left: -12px;" alt="">
                        <img src="https://i.pravatar.cc/150?u=3" style="width: 40px; height: 40px; border-radius: 50%; border: 2px solid var(--primary); margin-left: -12px;" alt="">
                    </div>
                    <span style="font-size: 14px; color: rgba(255,255,255,0.6);">Join <span style="color: white; font-weight: 700;">10,000+</span> students already learning</span>
                </div>
            </div>
            <div class="hero-image animate-fade-in-up delay-1">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&q=80&w=2071" alt="Learning at Jezdan">
            </div>
        </div>
    </section>

    <div class="container">
        <div class="stats-container animate-fade-in-up delay-2">
            <div class="stat-card">
                <h3>10k+</h3>
                <p>Global Students</p>
            </div>
            <div class="stat-card">
                <h3>47+</h3>
                <p>Premium Courses</p>
            </div>
            <div class="stat-card">
                <h3>95%</h3>
                <p>Success Rate</p>
            </div>
            <div class="stat-card">
                <h3>24/7</h3>
                <p>AI Tutor Support</p>
            </div>
        </div>
    </div>

    <section class="section" style="padding: 60px 0; border-bottom: 1px solid var(--border);">
        <div class="container">
            <p style="text-align: center; color: var(--text-muted); font-weight: 700; font-size: 14px; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 40px;">Trusted by Industry Leaders</p>
            <div style="display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap; gap: 40px; opacity: 0.5; filter: grayscale(1);">
                <i class="fa-brands fa-google fa-3x"></i>
                <i class="fa-brands fa-aws fa-3x"></i>
                <i class="fa-brands fa-microsoft fa-3x"></i>
                <i class="fa-brands fa-cisco fa-3x"></i>
                <i class="fa-brands fa-python fa-3x"></i>
            </div>
        </div>
    </section>

    <section id="features" class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Why Jezdan?</span>
                <h2>Revolutionizing Education with Technology</h2>
                <p>We provide a comprehensive learning ecosystem designed for the modern era, combining human expertise with AI intelligence.</p>
            </div>
            <div class="feature-grid">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fa-solid fa-robot"></i></div>
                    <h3>AI Learning Companion</h3>
                    <p>Our intelligent AI tutor adapts to your learning style, providing personalized feedback and 24/7 assistance on complex topics.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fa-solid fa-certificate"></i></div>
                    <h3>Industry Recognized</h3>
                    <p>Master skills and earn certifications that are globally recognized by top tech companies like Google, AWS, and Microsoft.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fa-solid fa-users-viewfinder"></i></div>
                    <h3>Expert Mentorship</h3>
                    <p>Learn from industry veterans through live sessions, interactive workshops, and one-on-one career guidance.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="courses" class="section" style="background: #f8faff;">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Our Courses</span>
                <h2>Start Your Learning Journey</h2>
                <p>Choose from our wide range of professional certifications and skill-based training programs.</p>
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
                    'title' => 'Python for Data Science',
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
                    'title' => 'AWS Certified Practitioner',
                    'category' => 'Cloud',
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
            <div style="text-align: center; margin-top: 60px;">
                <a href="/courses" class="btn btn-outline" style="padding: 16px 40px; border-radius: 100px;">Explore Full Catalog</a>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="cta-container animate-fade-in-up">
                <h2 style="font-size: clamp(32px, 5vw, 48px); margin-bottom: 24px;">Ready to Transform Your Life?</h2>
                <p style="font-size: 18px; opacity: 0.9; margin-bottom: 40px; max-width: 600px; margin-left: auto; margin-right: auto;">Join the thousands of professionals who have accelerated their careers with Jezdan Digital Academy.</p>
                <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                    <a href="/register" class="btn btn-white" style="padding: 18px 48px; font-size: 18px; border-radius: 12px; background: white; color: var(--primary);">Join Now - It's Free</a>
                    <a href="#" class="btn btn-outline" style="padding: 18px 48px; font-size: 18px; color: white; border-color: white;">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

@endsection

