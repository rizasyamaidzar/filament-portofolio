<?php

use App\Http\Controllers\GuestController;
use App\Models\Category;
use App\Models\Certificate;
use App\Models\Project_role;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/certificate', [GuestController::class, 'certificate']);
Route::get('/experience', [GuestController::class, 'experience']);
Route::get('/project', [GuestController::class, 'project']);
Route::get('/project/{id}', [GuestController::class, 'showProject']);
Route::get('/resume', [GuestController::class, 'resume']);

Route::fallback([GuestController::class, 'error_page'])->name('error_page');
