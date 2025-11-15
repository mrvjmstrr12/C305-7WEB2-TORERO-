<?php

use Illuminate\Support\Facades\Route;

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
