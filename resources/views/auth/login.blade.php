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
        <div class="auth-field"><label>Email Address</label><input type="email" placeholder="john.doe@gmail.com" id="loginEmail" value="student@jezdan.co.tz"></div>
        <div class="auth-field"><label>Password</label><input type="password" placeholder="••••••••" value="demo1234"></div>
        <button class="auth-btn" onclick="doLogin()"><i class="fa-solid fa-right-to-bracket" style="margin-right:8px"></i>Sign In to Dashboard</button>
        <div class="auth-divider">— or continue with —</div>
        <div class="social-btns">
            <div class="social-btn" onclick="doLogin()"><i class="fa-brands fa-google"></i> Google</div>
            <div class="social-btn" onclick="doLogin()"><i class="fa-brands fa-microsoft"></i> Microsoft</div>
            <div class="social-btn" onclick="doLogin()"><i class="fa-brands fa-linkedin"></i> LinkedIn</div>
        </div>
    </div>

    <div class="auth-skip">Demo access? <a onclick="doLogin()">Skip → Enter Platform</a></div>
@endsection
