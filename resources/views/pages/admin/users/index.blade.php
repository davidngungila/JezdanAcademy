@extends('layouts.app')

@section('title', 'User Management – Jezdan Digital Academy')
@section('page_title', 'User Management')

@section('content')
<div class="section-header">
    <div><h2>User Management</h2><p>Manage platform users and their roles</p></div>
    <button class="btn btn-primary" onclick="showModal('addUserModal')"><i class="fa-solid fa-user-plus"></i> Add New User</button>
</div>

@if(session('success'))
    <div class="info-box success mb-24"><i class="fa-solid fa-check-circle"></i><p>{{ session('success') }}</p></div>
@endif

<div class="card">
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>User</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Joined</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $u)
                <tr>
                    <td>
                        <div class="user-row">
                            <div class="ava" style="background:var(--accent)">{{ strtoupper(substr($u->name, 0, 2)) }}</div>
                            {{ $u->name }}
                        </div>
                    </td>
                    <td>{{ $u->email }}</td>
                    <td><span class="badge badge-gray" style="text-transform: capitalize;">{{ str_replace('_', ' ', $u->role) }}</span></td>
                    <td>{{ $u->created_at->format('M d, Y') }}</td>
                    <td>
                        <div style="display:flex; gap:6px;">
                            <button class="btn-icon" onclick="editUser({{ json_encode($u) }})"><i class="fa-solid fa-pen"></i></button>
                            <form action="{{ route('admin.users.destroy', $u->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-icon" style="color:var(--danger)"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- ADD USER MODAL -->
<div class="modal-overlay" id="addUserModal">
  <div class="modal">
    <div class="modal-header">
      <h3>Add New User</h3>
      <div class="modal-close" onclick="closeModal('addUserModal')"><i class="fa-solid fa-xmark"></i></div>
    </div>
    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        <div class="modal-body">
            <div class="form-group"><label>Full Name</label><input class="form-control" name="name" required></div>
            <div class="form-group"><label>Email Address</label><input type="email" class="form-control" name="email" required></div>
            <div class="form-group">
                <label>Role</label>
                <select class="form-control" name="role" required>
                    <option value="student">Student</option>
                    <option value="instructor">Instructor</option>
                    <option value="admin">Admin</option>
                    <option value="org_manager">Org Manager</option>
                </select>
            </div>
            <div class="form-group"><label>Password</label><input type="password" class="form-control" name="password" required></div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline" onclick="closeModal('addUserModal')">Cancel</button>
            <button type="submit" class="btn btn-primary">Create User</button>
        </div>
    </form>
  </div>
</div>

<!-- EDIT USER MODAL -->
<div class="modal-overlay" id="editUserModal">
  <div class="modal">
    <div class="modal-header">
      <h3>Edit User</h3>
      <div class="modal-close" onclick="closeModal('editUserModal')"><i class="fa-solid fa-xmark"></i></div>
    </div>
    <form id="editUserForm" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-body">
            <div class="form-group"><label>Full Name</label><input class="form-control" name="name" id="editName" required></div>
            <div class="form-group">
                <label>Role</label>
                <select class="form-control" name="role" id="editRole" required>
                    <option value="student">Student</option>
                    <option value="instructor">Instructor</option>
                    <option value="admin">Admin</option>
                    <option value="org_manager">Org Manager</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline" onclick="closeModal('editUserModal')">Cancel</button>
            <button type="submit" class="btn btn-primary">Update User</button>
        </div>
    </form>
  </div>
</div>
@endsection

@push('scripts')
<script>
    function editUser(user) {
        document.getElementById('editUserForm').action = '/admin/users/' + user.id;
        document.getElementById('editName').value = user.name;
        document.getElementById('editRole').value = user.role;
        showModal('editUserModal');
    }
</script>
@endpush
