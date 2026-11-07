<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'));
Route::get('/program', fn() => view('program'));
Route::get('/contact', fn() => view('contact'));

// CRUD Mahasiswa (index, create, store, show, edit, update, destroy)
Route::resource('mahasiswa', MahasiswaController::class);