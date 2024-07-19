<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello',
        'name' => 'Lary',
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs', function () {
    return view('jobs', [
        // 'jobs' => Job::with('employer')->paginate(3)
        'jobs' => Job::with('employer')->simplePaginate(3)
        // 'jobs' => Job::with('employer')->cursorPaginate(3)
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});
