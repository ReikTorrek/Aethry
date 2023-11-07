<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', \App\Livewire\BaseLayout::class);
Route::get('/auth', \App\Livewire\Login::class)->name('auth');
Route::get('/register', \App\Livewire\Register::class);
Route::middleware('auth')->group(function () {
    Route::get('/profile', \App\Livewire\Profile::class);
    Route::get('/logout', [\App\Livewire\Logout::class, 'logout']);
});
