<?php

use App\Http\Controllers\JobsController;
use Illuminate\Support\Facades\Route;

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
    return view('jobs.all-jobs');
});

Route::group(['prefix' => 'jobs'], function () {
    Route::get('/all', [JobsController::class, 'listJobs']);
    Route::post('/create', [JobsController::class, 'createJob']);
});

Route::group(['prefix' => 'job'], function () {
    Route::get('/new-job', [JobsController::class, 'newJobForm']);
    Route::get('/i/{id}', [JobsController::class, 'singleJob']);
});
