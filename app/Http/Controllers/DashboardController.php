<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $role = $request->get('role', 'student');
        
        // Mocking user for now based on role
        $user = User::where('role', $role)->first();
        
        if (!$user) {
            $user = User::where('role', 'student')->first();
            $role = 'student';
        }

        $data = [
            'role' => $role,
            'user' => $user,
            'stats' => $this->getStats($role, $user),
        ];

        return view('pages.dashboard.index', $data);
    }

    private function getStats($role, $user)
    {
        switch ($role) {
            case 'admin':
                return [
                    'revenue' => '$45,230',
                    'users' => User::count(),
                    'courses' => Course::count(),
                    'certificates' => 892,
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
                    'enrolled' => $user->enrolledCourses()->count(),
                    'completed' => 3,
                    'certs' => 5,
                    'streak' => 7,
                ];
        }
    }
}
