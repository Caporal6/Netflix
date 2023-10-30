<?php

use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActeurController;


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



Route::get('/',[FilmController::class,'index'])->name('film.index');
Route::get('/films/{id}',[FilmController::class,'show'])->name('film.show');


Route::get('/acteurs',[ActeurController::class,'index'])->name('acteur.index');