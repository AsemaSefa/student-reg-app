<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('login', [LoginController::class, 'authenticate'])->name('authenticate');

Route::resource('applications', ApplicationController::class)->names('applications');
