<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
Route::get('/', function () {
    return view('marvs');   // your home page
});

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/contact', function () {
    return view('contacts');
});
*/

Route::get('/', function () {
    return view('authentication.login');
});

Route::get('register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::get('login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('login', [AuthController::class, 'login'])->name('login'); 

Route::get('dashboard', function() {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

