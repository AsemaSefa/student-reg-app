<?php

use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('Welcome');

Route::resource('applications', ApplicationController::class)->names('applications');
