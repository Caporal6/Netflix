<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use App\Models\Films;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();
        $filmsHR = Film::where('categorie', 'Horreur')->get();
        $filmsAC = Film::where('categorie', 'Action')->get();
        $filmsAV = Film::where('categorie', 'Aventure')->get();
        $filmsCM = Film::where('categorie', 'Comedie')->get();
        $filmsAM = Film::where('categorie', 'Amour')->get();

        return View('film.index', compact('films','filmsHR','filmsAC','filmsAV','filmsCM','filmsAM'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $film = Film::find($id);

        return view('film.show',['film'=>$film]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}