<?php

use App\Http\Controllers\JobsController;
use Illuminate\Support\Facades\Route;
use App\Models\JobPost;

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
    return view('jobs.allJobs');
});

Route::group(['prefix' => 'jobs'], function () {
    Route::get('/all', [JobsController::class, 'index'])->name('index');
    Route::post('/create', [JobsController::class, 'store'])->name('store');
});

Route::group(['prefix' => 'job'], function () {
    Route::get('/new-job', [JobsController::class, 'create'])->name('newjobform');
    Route::get('/i/{job}', function (JobPost $job) {
        return view('jobs.singleJob', compact('job'));
    })->name('jobpost');
});
