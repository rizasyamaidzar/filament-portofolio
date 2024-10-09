<?php

use App\Models\Category;
use App\Models\Certificate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
