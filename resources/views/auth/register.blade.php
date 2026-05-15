@extends('layouts.auth')

@section('title', 'Register – Jezdan Digital Academy')

@section('content')
    <div class="auth-tabs">
        <div class="auth-tab" onclick="switchAuthTab('login')">Sign In</div>
        <div class="auth-tab active" onclick="switchAuthTab('register')">Register</div>
    </div>

    <!-- REGISTER FORM -->
    <div id="registerForm">
        <div class="auth-field"><label>Full Name</label><input type="text" placeholder="Amina Mohamed"></div>
        <div class="auth-field"><label>Email</label><input type="email" placeholder="amina@example.co.tz"></div>
        <div class="auth-field"><label>Phone (WhatsApp)</label><input type="tel" placeholder="+255 712 345 678"></div>
        <div class="auth-field"><label>Account Type</label>
            <select><option>Student</option><option>Instructor</option><option>Organization</option></select>
        </div>
        <div class="auth-field"><label>Password</label><input type="password" placeholder="Create strong password"></div>
        <button class="auth-btn" onclick="doLogin()"><i class="fa-solid fa-user-plus" style="margin-right:8px"></i>Create Account – Free</button>
    </div>

    <div class="auth-skip">Already have an account? <a onclick="switchAuthTab('login')">Sign In →</a></div>
@endsection
