<?php

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\PlayerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Show Home Page
Route::get('/', function() {
    return view('index');
});

// Show All Leagues
Route::get('/leagues', [LeagueController::class, 'index']);

// Show League Create Form
Route::get('/leagues/create', [LeagueController::class, 'create'])->middleware('auth');

// Save League
Route::post('/leagues', [LeagueController::class, 'store'])->middleware('auth');

// Show Players Page
Route::get('/players', [PlayerController::class, 'index']);

// Show Player Create Form
Route::get('/players/create', [PlayerController::class, 'create'])->middleware('auth');

// Show Players Card
Route::get('/players/{player}', [PlayerController::class, 'show']);

// Save Player
Route::post('/players', [PlayerController::class, 'store'])->middleware('auth');

// Show Player's Edit Form
Route::get('/players/{player}/edit', [PlayerController::class, 'edit'])->middleware('auth');

// Update Player's Data
Route::put('/players/{player}', [PlayerController::class, 'update'])->middleware('auth');

// Delete Player
Route::delete('/players/{player}', [PlayerController::class, 'destroy'])->middleware('auth');


// Show Register Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Store New User 
Route::post('/users', [UserController::class, 'store'])->middleware('guest');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Authenticate User
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->middleware('guest');

// Logout User
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');