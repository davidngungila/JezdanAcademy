@extends('layouts.auth')

@section('title', 'Sign In – Jezdan Digital Academy')

@section('content')
    <div class="auth-tabs">
        <div class="auth-tab active" onclick="switchAuthTab('login')">Sign In</div>
        <div class="auth-tab" onclick="switchAuthTab('register')">Register</div>
    </div>

    <!-- LOGIN FORM -->
    <div id="loginForm">
        <div class="role-pills">
            <div class="role-pill active" onclick="selectRole(this,'student')">🎓 Student</div>
            <div class="role-pill" onclick="selectRole(this,'instructor')">👩‍🏫 Instructor</div>
            <div class="role-pill" onclick="selectRole(this,'admin')">⚙️ Admin</div>
            <div class="role-pill" onclick="selectRole(this,'org_manager')">🏢 Org Manager</div>
        </div>
        <div class="auth-field"><label>Email Address</label><input type="email" placeholder="john.doe@gmail.com" id="loginEmail"></div>
        <div class="auth-field"><label>Password</label><input type="password" placeholder="••••••••" id="loginPassword"></div>
        <button class="auth-btn" onclick="doLogin()"><i class="fa-solid fa-right-to-bracket" style="margin-right:8px"></i>Sign In to Dashboard</button>
        
        <div class="auth-divider"><span>or continue with</span></div>
        
        <div class="social-btns">
            <button class="social-btn" onclick="socialLogin('Google')">
                <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" width="18" alt="Google">
                Google
            </button>
            <button class="social-btn" onclick="socialLogin('Microsoft')">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" width="18" alt="Microsoft">
                Microsoft
            </button>
            <button class="social-btn" onclick="socialLogin('LinkedIn')">
                <i class="fa-brands fa-linkedin" style="color:#0077b5;font-size:18px"></i>
                LinkedIn
            </button>
        </div>
    </div>

    <div class="auth-skip">Demo access? <a onclick="doLogin()">Skip → Enter Platform</a></div>
@endsection
