<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\IndexController;


//Route::get('/', [IndexController::class, 'index'])->name('home');
Route::inertia('/', [IndexController::class, 'index'])->name('home');
