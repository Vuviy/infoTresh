<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Home::class, 'index'])->name('home');
