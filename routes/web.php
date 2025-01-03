<?php

use App\Http\Controllers\GuestController;
use App\Models\Category;
use App\Models\Certificate;
use App\Models\Project_role;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/certificates', [GuestController::class, 'certificate']);
Route::post('/message', [GuestController::class, 'message']);


Route::get('/experience', [GuestController::class, 'experience']);
Route::get('/project', [GuestController::class, 'project']);
Route::get('/project/{id}', [GuestController::class, 'showProject']);
Route::get('/resume', [GuestController::class, 'resume']);

Route::get('/', [GuestController::class, 'home']);
Route::get('/about', [GuestController::class, 'about']);
Route::get('/contact', [GuestController::class, 'contact']);
Route::get('/service', [GuestController::class, 'service']);
Route::get('/single-project', [GuestController::class, 'singleProject']);
Route::get('/works', [GuestController::class, 'works']);

Route::fallback([GuestController::class, 'error_page'])->name('error_page');
