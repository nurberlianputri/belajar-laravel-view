<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'));
Route::get('/program', fn() => view('program'));
Route::get('/contact', fn() => view('contact'));