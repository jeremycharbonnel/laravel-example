<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Mail\JobPosted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello',
        'name' => 'Lary',
    ]);
});

// Route::get('/about', function () {
//     return view('about');
// });

Route::view('/about', 'about');


// Route::controller(JobController::class)->group(function() {
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/{job}', 'show');
//     Route::get('/jobs/create', 'create');
//     Route::post('/jobs', 'store');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::patch('/jobs/{job}', 'update');
//     Route::delete('/jobs/{job}', 'destroy');
// });

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::get('/jobs/{job}', [JobController::class, 'show']);
Route::post('/jobs', [JobController::class, 'store'])
    ->middleware('auth');

Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
    // ->middleware(['auth', 'can:edit-job,job']);
    ->middleware('auth')
    ->can('edit', 'job');

Route::patch('/jobs/{job}', [JobController::class, 'update'])
    ->middleware('auth')
    // ->can('edit-job', 'job');
    ->can('edit', 'job');

Route::delete('/jobs/{job}', [JobController::class, 'destroy'])
    ->middleware('auth')
    ->can('edit', 'job');

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
