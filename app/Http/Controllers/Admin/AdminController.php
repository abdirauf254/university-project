<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Assignment;

class AdminController extends Controller
{
    //
     public function dashboard()
    {
        return view('admin.dashboard', [
            'totalStudents' => User::where('role', 'student')->count(),
            'totalLecturers' => User::where('role', 'lecturer')->count(),
            'totalAssignments' => Assignment::count(),
        ]);
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function updateSettings()
    {
        auth()->user()->update(request()->only('name', 'email'));

        return back()->with('success', 'Settings updated.');
    }
}
