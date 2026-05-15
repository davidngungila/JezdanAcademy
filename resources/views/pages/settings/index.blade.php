@extends('layouts.app')

@section('title', 'Settings – Jezdan Digital Academy')
@section('page_title', 'Settings')

@section('content')
<div class="section-header"><div><h2>Settings</h2><p>Manage your profile and preferences</p></div></div>

@if(session('success'))
    <div class="info-box success mb-24"><i class="fa-solid fa-check-circle"></i><p>{{ session('success') }}</p></div>
@endif

@if($errors->any())
    <div class="info-box warning mb-24">
        <i class="fa-solid fa-triangle-exclamation"></i>
        <ul style="margin: 0; padding-left: 20px; font-size: 13px;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="grid-2">
    <!-- PROFILE UPDATE -->
    <div class="card mb-20">
        <div class="card-header"><span class="card-title">Profile Information</span></div>
        <div class="card-body">
            <form action="/settings" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="text-align:center;margin-bottom:20px">
                    <div style="width:82px;height:82px;background:var(--accent);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:26px;font-weight:700;color:#fff;margin:0 auto 10px; overflow:hidden;">
                        @if($user->avatar)
                            <img src="{{ asset('storage/'.$user->avatar) }}" style="width:100%; height:100%; object-fit:cover;">
                        @else
                            {{ strtoupper(substr($user->name, 0, 2)) }}
                        @endif
                    </div>
                    <input type="file" name="avatar" id="avatarInput" style="display:none;" onchange="this.form.submit()">
                    <button type="button" class="btn btn-outline btn-sm" onclick="document.getElementById('avatarInput').click()">
                        <i class="fa-solid fa-camera"></i> Change Photo
                    </button>
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
        <!-- PASSWORD UPDATE -->
        <div class="card mb-20">
            <div class="card-header"><span class="card-title">Security & Password</span></div>
            <div class="card-body">
                <form action="{{ route('settings.password') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Current Password</label>
                        <input type="password" name="current_password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Confirm New Password</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-dark" style="width:100%"><i class="fa-solid fa-lock"></i> Update Password</button>
                </form>
            </div>
        </div>

        <!-- PREFERENCES -->
        <div class="card mb-20">
            <div class="card-header"><span class="card-title">Preferences</span></div>
            <div class="card-body">
                <div class="flex-between" style="padding:10px 0;border-bottom:1px solid var(--border)"><span>Dark Mode</span><label class="toggle"><input type="checkbox" id="darkModeToggle2" onchange="toggleTheme()"><span class="toggle-slider"></span></label></div>
                <div class="flex-between" style="padding:10px 0;border-bottom:1px solid var(--border)"><span>Language</span><select class="form-control" style="width:130px"><option>English</option><option>Kiswahili</option><option>French</option></select></div>
                <div class="flex-between" style="padding:10px 0;border-bottom:1px solid var(--border)"><span>Offline Mode</span><label class="toggle"><input type="checkbox"><span class="toggle-slider"></span></label></div>
            </div>
        </div>

        @if($user->role === 'admin')
        <!-- ADMIN ACTIONS -->
        <div class="card mb-20" style="border-color: var(--accent)">
            <div class="card-header" style="background: var(--accent-pale)"><span class="card-title">Admin Management</span></div>
            <div class="card-body">
                <p style="font-size: 13px; color: var(--text-muted); margin-bottom: 14px;">Manage all platform users, roles, and system-wide settings.</p>
                <a href="{{ route('admin.users.index') }}" class="btn btn-primary" style="width: 100%;">
                    <i class="fa-solid fa-users-gear"></i> Manage All Users
                </a>
            </div>
        </div>
        @endif

        <!-- DANGER ZONE -->
        <div class="card" style="border-color: rgba(239,68,68,0.2)">
            <div class="card-header" style="background: rgba(239,68,68,0.05)"><span class="card-title" style="color: var(--danger)">Danger Zone</span></div>
            <div class="card-body">
                <p style="font-size: 13px; color: var(--text-muted); margin-bottom: 14px;">Once you delete your account, there is no going back. Please be certain.</p>
                <button class="btn btn-outline" style="color: var(--danger); border-color: var(--danger); width: 100%;" onclick="showModal('deleteAccModal')">
                    <i class="fa-solid fa-trash-can"></i> Delete My Account
                </button>
            </div>
        </div>
    </div>
</div>

<!-- DELETE ACCOUNT MODAL -->
<div class="modal-overlay" id="deleteAccModal">
  <div class="modal">
    <div class="modal-header">
      <h3 style="color: var(--danger)">Delete Account</h3>
      <div class="modal-close" onclick="closeModal('deleteAccModal')"><i class="fa-solid fa-xmark"></i></div>
    </div>
    <div class="modal-body">
      <div class="info-box warning"><i class="fa-solid fa-triangle-exclamation"></i><p>This action is permanent and will remove all your learning data, certificates, and access.</p></div>
      <form action="{{ route('settings.delete') }}" method="POST" id="deleteForm">
        @csrf
        <div class="form-group">
            <label>Confirm your password to proceed</label>
            <input type="password" name="password" class="form-control" required>
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <button class="btn btn-outline" onclick="closeModal('deleteAccModal')">Cancel</button>
      <button class="btn btn-primary" style="background: var(--danger); border-color: var(--danger);" onclick="document.getElementById('deleteForm').submit()">Yes, Delete Forever</button>
    </div>
  </div>
</div>
@endsection
