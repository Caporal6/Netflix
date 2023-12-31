<?php

use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActeurController;
use App\Http\Controllers\UsagerController;


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



Route::get('/films',[FilmController::class,'index'])->name('film.index')->middleware('auth');


Route::get('/films/create',[FilmController::class,'create'])->name('film.create')->middleware(['auth','checkRole:admin']);
Route::post('/films/create',[FilmController::class,'store'])->name('film.store')->middleware(['auth','checkRole:admin']);
Route::get('/films/{id}',[FilmController::class,'show'])->name('film.show')->middleware('auth');
Route::get('/films/edit/{id}',[FilmController::class,'edit'])->name('film.edit')->middleware(['auth','checkRole:admin']);
Route::patch('/film/update/{id}',[FilmController::class,'update'])->name('film.update')->middleware(['auth','checkRole:admin']);
Route::delete('/film/delete/{id}',[FilmController::class,'destroy'])->name('film.destroy')->middleware(['auth','checkRole:admin']);

Route::get('/acteurs',[ActeurController::class,'index'])->name('acteur.index')->middleware('auth');
Route::get('/acteurs/create',[ActeurController::class,'create'])->name('acteur.create')->middleware(['auth','checkRole:admin']);
Route::post('/acteurs',[ActeurController::class,'store'])->name('acteur.store')->middleware(['auth','checkRole:admin']);
Route::get('/acteurs/{id}',[ActeurController::class,'show'])->name('acteur.show')->middleware('auth');
Route::get('/acteurs/{id}/modifier/',[ActeurController::class,'edit'])->name('acteur.edit')->middleware(['auth','checkRole:admin']);
Route::patch('/acteurs/{id}/modifier/',[ActeurController::class,'update'])->name('acteur.update')->middleware(['auth','checkRole:admin']);
Route::delete('/acteurs/delete/{id}',[ActeurController::class,'destroy'])->name('acteur.destroy')->middleware(['auth','checkRole:admin']);




Route::get('/',[\App\Http\Controllers\UsagerController::class,'showLoginForm'])->name('showLoginForm');
Route::post('/',[\App\Http\Controllers\UsagerController::class,'login'])->name('login');
Route::post('/logout',[\App\Http\Controllers\UsagerController::class,'logout'])->name('logout')->middleware('auth');

Route::get('/usager',[UsagerController::class,'index'])->name('usager.index')->middleware(['auth','checkRole:admin']);
Route::get('/usager/create',[UsagerController::class,'create'])->name('usager.create')->middleware(['auth','checkRole:admin']);
Route::post('/usager',[UsagerController::class,'store'])->name('usager.store')->middleware(['auth','checkRole:admin']);
Route::delete('/usager/delete/{id}',[UsagerController::class,'destroy'])->name('usager.destroy')->middleware(['auth','checkRole:admin']);
Route::get('/usager/edit/{id}',[UsagerController::class,'edit'])->name('usager.edit')->middleware(['auth','checkRole:admin']);
Route::patch('/usager/modifier/{id}',[UsagerController::class,'update'])->name('usager.update')->middleware('auth','checkRole:admin');
