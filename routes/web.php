<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index']);
Route::get('/beats', [PagesController::class, 'beats']);
Route::get('/credits', [PagesController::class, 'credits']);
Route::get('/github', [PagesController::class, 'github']);
Route::get('/tracks', [PagesController::class, 'tracks']);

Route::post('/add_beat', [PagesController::class, 'addBeat']);
