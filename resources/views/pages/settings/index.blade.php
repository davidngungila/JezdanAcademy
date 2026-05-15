@extends('layouts.app')

@section('title', 'Settings – Jezdan Digital Academy')
@section('page_title', 'Settings')

@section('content')
<div class="section-header"><div><h2>Settings</h2><p>Manage your profile and preferences</p></div></div>

@if(session('success'))
    <div class="info-box success mb-24"><i class="fa-solid fa-check-circle"></i><p>{{ session('success') }}</p></div>
@endif

<div class="grid-2">
    <div class="card mb-20">
        <div class="card-header"><span class="card-title">Profile Information</span></div>
        <div class="card-body">
            <form action="/settings" method="POST">
                @csrf
                <div style="text-align:center;margin-bottom:20px">
                    <div style="width:72px;height:72px;background:var(--accent);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:26px;font-weight:700;color:#fff;margin:0 auto 10px">
                        {{ strtoupper(substr($user->name, 0, 2)) }}
                    </div>
                    <button type="button" class="btn btn-outline btn-sm" onclick="showToast('Photo upload opened','fa-camera')"><i class="fa-solid fa-camera"></i> Change Photo</button>
                </div>
                <div class="form-group">
                    <label>Full Name</label>
                    <input class="form-control" name="name" value="{{ old('name', $user->name) }}" required>
                </div>
                <div class="form-group">
                    <label>Email (Read-only)</label>
                    <input class="form-control" value="{{ $user->email }}" readonly style="opacity: 0.7; cursor: not-allowed;">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input class="form-control" name="phone" value="{{ old('phone', $user->phone) }}">
                </div>
                <div class="form-group">
                    <label>Location</label>
                    <input class="form-control" name="location" value="{{ old('location', $user->location) }}">
                </div>
                <button type="submit" class="btn btn-primary" style="width:100%"><i class="fa-solid fa-floppy-disk"></i> Save Changes</button>
            </form>
        </div>
    </div>
    <div>
        <div class="card mb-20">
            <div class="card-header"><span class="card-title">Preferences</span></div>
            <div class="card-body">
                <div class="flex-between" style="padding:10px 0;border-bottom:1px solid var(--border)"><span>Dark Mode</span><label class="toggle"><input type="checkbox" id="darkModeToggle2" onchange="toggleTheme()"><span class="toggle-slider"></span></label></div>
                <div class="flex-between" style="padding:10px 0;border-bottom:1px solid var(--border)"><span>Language</span><select class="form-control" style="width:130px"><option>English</option><option>Kiswahili</option><option>French</option></select></div>
                <div class="flex-between" style="padding:10px 0;border-bottom:1px solid var(--border)"><span>Offline Mode</span><label class="toggle"><input type="checkbox"><span class="toggle-slider"></span></label></div>
            </div>
        </div>
        <div class="card">
            <div class="card-header"><span class="card-title">Mobile App</span></div>
            <div class="card-body">
                <div class="info-box info" style="margin-bottom:14px"><i class="fa-solid fa-mobile-screen-button"></i><p>Download the Jezdan Academy mobile app for offline learning and push notifications.</p></div>
                <button class="btn btn-dark" style="width:100%;margin-bottom:8px" onclick="showToast('Opening Google Play Store…','fa-android')"><i class="fa-brands fa-google-play"></i> Download Android App</button>
                <button class="btn btn-dark" style="width:100%" onclick="showToast('Opening App Store…','fa-apple')"><i class="fa-brands fa-apple"></i> Download iOS App</button>
            </div>
        </div>
    </div>
</div>
@endsection
