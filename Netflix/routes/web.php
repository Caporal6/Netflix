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


Route::get('/films/create',[FilmController::class,'create'])->name('film.create');
Route::post('/films/create',[FilmController::class,'store'])->name('film.store');
Route::get('/films/{id}',[FilmController::class,'show'])->name('film.show');

Route::get('/acteurs',[ActeurController::class,'index'])->name('acteur.index');




Route::get('/acteurs/create',[ActeurController::class,'create'])->name('acteur.create');

Route::post('/acteurs',[ActeurController::class,'store'])->name('acteur.store');


Route::get('/acteurs/{id}',[ActeurController::class,'show'])->name('acteur.show');
Route::get('/films/{id}',[FilmController::class,'show'])->name('film.show');