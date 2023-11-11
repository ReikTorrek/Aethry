<?php

use App\Livewire\BaseLayout;
use App\Livewire\CharacterCreate;
use App\Livewire\CharacterList;
use App\Livewire\Characters;
use App\Livewire\DiceRoller;
use App\Livewire\Login;
use App\Livewire\Logout;
use App\Livewire\Profile;
use App\Livewire\Register;
use App\Livewire\Rules;
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

Route::get('/', BaseLayout::class);
Route::get('/auth', Login::class)->name('auth');
Route::get('/register', Register::class);
Route::get('/rules', Rules::class);
Route::get('/dice', DiceRoller::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', Profile::class);
    Route::get('/characters', Characters::class);
    Route::get('/characters/{id}', CharacterList::class);
    Route::get('/character_create', CharacterCreate::class);
    Route::get('/logout', [Logout::class, 'logout']);
});
