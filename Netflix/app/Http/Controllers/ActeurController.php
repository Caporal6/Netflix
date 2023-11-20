<?php

namespace App\Http\Controllers;

use App\Models\Acteur;
use App\Models\Film;
use Illuminate\Http\Request;
use App\Http\Requests\ActeurRequest;
use Illuminate\Support\Facades\Log;


class ActeurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $acteurs = Acteur::all();
        return view('acteur.index',["acteurs"=>$acteurs]);


    }

/**
 * Affiche le formulaire pour ajouter un produit.
 *
 * @return IlluminateViewView
 */

    public function create()
    {
        $films = Film::all();
        return View('acteur.create',["films"=>$films]);
    }

    /**
          * Store a newly created resource in storage.
          *
          * @param  \Illuminate\Http\Request  $request
          * @return \Illuminate\Http\Response
          */
     
    public function store(ActeurRequest $request)
    {
                try {
                        $acteur = new Acteur($request->all());
                        $acteur->save();
                    }
                    catch (\Throwable $e) {
                        //Gérer l'erreur
                        Log::debug($e);

                    }
                    return redirect()->route('acteur.index');
            
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $acteur = Acteur::find($id);

        return view('acteur.show',['acteur'=>$acteur]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return View('acteur.edit', ['acteur'=>Acteur::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActeurRequest $request, string $id)
    {
        $acteur = Acteur::find($id);
                try{
                        
                        $acteur->nom = $request->nom;
                        $acteur->date_naissance = $request->date_naissance; 
                        $acteur->lieux = $request->lieux; 
                        $acteur->photo = $request->photo; 

                        
                        $acteur->save();
                        return redirect()->route('acteur.index')->with('message',"Modification de". $acteur->nom . "réussi!");
                    }
                    catch(\Throwable   $e){
                        //Gérer   l'erreur
                        return redirect()->route('film.index')->withErrors(['la modification n\'a pas fonctionné']);   
                    }
                    return redirect()->route('film.index');
            
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        try{
                  $acteur = Acteur::findOrFail($id);
                  $acteur->films()->detach();
                  $acteur->delete();
                    return redirect()->route('acteur.index')->with('message', "Suppression de " . $acteur->nom . " réussi!");
                }
                catch(\Throwable $e){
                    Log::debug($e);
                   return redirect()->route('film.index')->withErrors(['la suppression n\'a pas fonctionné']); 
                 }
                    return redirect()->route('film.index');
            
    }
}