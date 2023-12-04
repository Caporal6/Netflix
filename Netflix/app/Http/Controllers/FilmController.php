<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilmRequest;
use App\Models\Acteur;
use App\Models\Film;
use App\Models\Films;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


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

        return view('film.index',compact('films'));
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

        try {
            $uploadFile = $request->file('photo');
            $nomFichierUnique = str_replace('','_',$request->titre).'-'.uniqid().'.'.$uploadFile->extension();

            try {
                $request->photo->move(public_path('img/films'),$nomFichierUnique);
            }catch (\FileException $e){

            }

            $film = Film::create([
                "titre" => $request->titre,
                "duree"=> $request->duree,
                "annee" => $request->annee,
                "rating" => $request->rating,
                "photo" => $nomFichierUnique,
                "categorie" => $request->categorie,
                "resume" => $request->resume,
                "realisateur_id"=>$request->realisateur,
                "producteur_id"=>$request->producteur
            ]);
            
            return redirect()->route('film.index')->with('message','film ajouté');

        }catch (\Throwable $e){
            dd($e);
            return  redirect()->route('film.index')->withErrors(["l'ajout n'A pas fonctionné"]);
        }
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
        try{
            $uploadFile = $request->file('photo');
            $nomFichierUnique = str_replace('','_',$request->titre).'-'.uniqid().'.'.$uploadFile->extension();

            try {
                $request->photo->move(public_path('img/films'),$nomFichierUnique);
            }catch (\FileException $e){

            }

            $film = Film::find($id);
            $this->removeImage($film->photo);

            $film->titre = $request->titre;
            $film->duree = $request->duree;
            $film->annee = $request->annee;
            $film->rating = $request->rating;
            $film->photo = $nomFichierUnique;
            $film->categorie = $request->categorie;
            $film->resume = $request->resume;
            $film->realisateur_id= $request->realisateur;
            $film->producteur_id = $request->producteur;

            $film->save();

            return redirect()->route('film.index')->with('message','film'.$film->nom.' modifié');
        }catch (\Throwable $e){
            return  redirect()->back()->withErrors(["l'ajout n'A pas fonctionné"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        try{
            $film = Film::findOrFail($id);

            DB::table('acteur_film')->where('film_id',$film->id)->delete();

            $film->delete();

            $this->removeImage($film->photo);
            return redirect()->route('film.index')->with('message','film'.$film->nom.' supprime');

        }catch(\Throwable $e){
            return redirect()->route('film.index')->withErrors([" la suppression n'a pas fonctionné"]);
        }
    }

    private function removeImage($name){
        $file =public_path('img/films/'.$name);
        $img=File::delete($file);
    }
}
