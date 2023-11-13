<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilmRequest;
use App\Models\Acteur;
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
        $acteurs = Acteur::all();
        return view('film.create',["acteurs"=>$acteurs]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FilmRequest $request)
    {
        
        $film = Film::create([
            "titre" => $request->titre,
            "duree"=> $request->duree,
            "annee" => $request->annee,
            "rating" => $request->rating,
            "photo" => $request->photo,
            "categorie" => $request->categorie,
            "resume" => $request->resume,
            "realisateur_id"=>$request->realisateur,
            "producteur_id"=>$request->producteur
        ]);

        return redirect()->route('film.index')->with('message','film ajouté');
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
        return view('film.edit',['film'=>Film::find($id),'acteurs'=>Acteur::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FilmRequest $request, string $id)
    {
        $film = Film::find($id);
    
       $film->titre = $request->titre;
       $film->duree = $request->duree;
       $film->annee = $request->annee;
       $film->rating = $request->rating;
       $film->photo = $request->photo;
       $film->categorie = $request->categorie;
       $film->resume = $request->resume;
       $film->realisateur_id= $request->realisateur;
       $film->producteur_id = $request->producteur;

       $film->save(); 
       
       return redirect()->route('film.index')->with('message','film'.$film->nom.' modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $film = Film::findOrFail($id);
            $film->acteurs()->detatch();
            $film->delete();

            return redirect()->route('film.index')->with('message','film'.$film->nom.' supprime');

        }catch(\Throwable $e){
            return redirect()->route('film.index')->withErrors([" la suppression n'a pas fonctionné"]);
        }
    }
}