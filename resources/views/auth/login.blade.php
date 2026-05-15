@extends('layouts.auth')

@section('title', 'Sign In – Jezdan Digital Academy')

@section('content')
    <div class="auth-tabs">
        <div class="auth-tab active" onclick="switchAuthTab('login')">Sign In</div>
        <div class="auth-tab" onclick="switchAuthTab('register')">Register</div>
    </div>

    <!-- LOGIN FORM -->
    <div id="loginForm">
      
        <div class="auth-field"><label>Email Address</label><input type="email" placeholder="john.doe@gmail.com" id="loginEmail"></div>
        <div class="auth-field"><label>Password</label><input type="password" placeholder="••••••••" id="loginPassword"></div>
        <button class="auth-btn" onclick="doLogin()"><i class="fa-solid fa-right-to-bracket" style="margin-right:8px"></i>Sign In to Dashboard</button>
        
        <div class="auth-divider"><span>or continue with</span></div>
        
      
    </div>

    @endsection
