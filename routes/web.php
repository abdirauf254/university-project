<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\AssignmentManagementController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Lecturer\LecturerController;
use App\Http\Controllers\Lecturer\LecturerAssignmentController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Student\SubmissionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/careers', function () {
    return view('pages.careers');
})->name('careers');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Dashboard entry points
Route::middleware(['auth'])->group(function () {
    Route::get('/redirect', function() {
        $role = auth()->user()->role;
        if ($role === 'admin') return redirect()->route('admin.dashboard');
        if ($role === 'lecturer') return redirect()->route('lecturer.dashboard');
        return redirect()->route('student.dashboard');
    });

    // Admin
    Route::prefix('admin')->name('admin.')->middleware('admin')->group(function() {
        Route::get('/dashboard', [AdminController::class,'dashboard'])->name('dashboard');

        // User management (students & lecturers)
        Route::resource('users', UserManagementController::class)->except(['show']);
        // Assignments and submissions
        Route::resource('assignments', AssignmentManagementController::class);
        Route::get('submissions/{assignment}', [AssignmentManagementController::class,'submissions'])->name('assignments.submissions');

        // Reports
        Route::get('reports', [ReportController::class,'index'])->name('reports.index');
        Route::get('reports/pdf', [ReportController::class,'exportPdf'])->name('reports.pdf');

        // Settings/profile
        Route::get('settings', [AdminController::class,'settings'])->name('settings');
        Route::post('settings', [AdminController::class,'updateSettings'])->name('settings.update');
    });

    // Lecturer
    Route::prefix('lecturer')->name('lecturer.')->middleware('lecturer')->group(function() {
        Route::get('/dashboard',[LecturerController::class,'dashboard'])->name('dashboard');
        Route::resource('assignments', LecturerAssignmentController::class);
        Route::get('submissions/{assignment}', [LecturerAssignmentController::class,'submissions'])->name('assignments.submissions');
        Route::post('assignments/{assignment}/grade', [LecturerAssignmentController::class,'grade'])->name('assignments.grade');
        Route::get('profile', [LecturerController::class,'profile'])->name('profile');
        Route::post('profile', [LecturerController::class,'updateProfile'])->name('profile.update');
    });

    // Student
    Route::prefix('student')->name('student.')->middleware('student')->group(function() {
        Route::get('/dashboard',[StudentController::class,'dashboard'])->name('dashboard');
        Route::resource('submissions', SubmissionController::class)->only(['index','create','store','show','destroy']);
        Route::get('profile', [StudentController::class,'profile'])->name('profile');
        Route::post('profile', [StudentController::class,'updateProfile'])->name('profile.update');
        Route::get('notifications', [StudentController::class,'notifications'])->name('notifications');
    });
});

require __DIR__.'/auth.php';
