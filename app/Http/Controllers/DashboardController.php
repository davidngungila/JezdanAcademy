<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Enrollment;
use App\Models\Exam;
use App\Models\LiveSession;
use App\Models\Resource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $role = $user->role;

        return view('pages.dashboard.index', [
            'role' => $role,
            'user' => $user,
            'stats' => $this->getStats($role, $user),
        ]);
    }

    public function myLearning()
    {
        $user = Auth::user();
        $enrollments = $user->enrollments()->with('course')->get();
        
        return view('pages.learning.index', [
            'enrollments' => $enrollments,
            'stats' => [
                'enrolled' => $enrollments->count(),
                'completed' => $enrollments->where('progress', 100)->count(),
                'time' => '46h', // Mocked
                'rating' => '4.7' // Mocked
            ]
        ]);
    }

    public function exams()
    {
        $exams = Exam::with('course')->get();
        $results = Certificate::where('user_id', Auth::id())->with('course')->get();
        
        return view('pages.exams.index', compact('exams', 'results'));
    }

    public function certificates()
    {
        $certificates = Auth::user()->certificates()->with('course')->get();
        return view('pages.certificates.index', compact('certificates'));
    }

    public function library()
    {
        $resources = Resource::all();
        return view('pages.library.index', compact('resources'));
    }

    public function liveSessions()
    {
        $sessions = LiveSession::with('instructor')->orderBy('scheduled_at', 'asc')->get();
        $history = LiveSession::where('status', 'Completed')->with('instructor')->get();
        
        return view('pages.live.index', compact('sessions', 'history'));
    }

    public function settings()
    {
        $data = [
            'user' => Auth::user(),
        ];

        if (Auth::user()->role === 'admin') {
            $data['systemSettings'] = \App\Models\SystemSetting::all()->groupBy('group');
        }

        return view('pages.settings.index', $data);
    }

    public function updateSettings(Request $request)
    {
        $user = Auth::user();
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'location' => 'nullable|string|max:255',
            'bio' => 'nullable|string|max:1000',
            'website' => 'nullable|url|max:255',
            'github' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'language' => 'nullable|string',
            'dark_mode' => 'nullable|boolean',
            'offline_mode' => 'nullable|boolean',
        ]);

        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars', 'public');
            $data['avatar'] = $path;
        }

        // Handle checkboxes (boolean values)
        $data['dark_mode'] = $request->has('dark_mode');
        $data['offline_mode'] = $request->has('offline_mode');

        $user->update($data);

        return back()->with('success', 'Settings updated successfully!');
    }

    public function updateSystemSettings(Request $request)
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
        }

        $settings = $request->except('_token');
        
        foreach ($settings as $key => $value) {
            \App\Models\SystemSetting::where('key', $key)->update(['value' => $value]);
        }

        return back()->with('success', 'System settings updated successfully!');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|current_password',
            'password' => 'required|confirmed|min:8',
        ]);

        Auth::user()->update([
            'password' => Hash::make($request->password),
        ]);

        return back()->with('success', 'Password changed successfully!');
    }

    public function deleteAccount(Request $request)
    {
        $request->validate([
            'password' => 'required|current_password',
        ]);

        $user = Auth::user();
        Auth::logout();
        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Your account has been deleted.');
    }

    private function getStats($role, $user)
    {
        switch ($role) {
            case 'admin':
                return [
                    'revenue' => '$45,230',
                    'users' => User::count(),
                    'courses' => \App\Models\Course::count(),
                    'certificates' => Certificate::count(),
                ];
            case 'instructor':
                return [
                    'students' => 312,
                    'revenue' => '$4,820',
                    'courses' => $user->taughtCourses()->count(),
                    'rating' => 4.8,
                ];
            case 'org_manager':
                return [
                    'team' => 45,
                    'completion' => '78%',
                    'spend' => '$2,480',
                    'certs' => 12,
                ];
            default:
                return [
                    'enrolled' => $user->enrollments()->count(),
                    'completed' => $user->enrollments()->where('progress', 100)->count(),
                    'certs' => $user->certificates()->count(),
                    'streak' => 7,
                ];
        }
    }
}
