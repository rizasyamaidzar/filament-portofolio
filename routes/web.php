<?php

use App\Models\Category;
use App\Models\Certificate;
use App\Models\Project_role;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $d = Project_role::get();
    dd($d);
    return view('welcome');
});
