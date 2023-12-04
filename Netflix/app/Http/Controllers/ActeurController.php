<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActeurRequest;
use App\Models\Acteur;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class ActeurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $acteurs = Acteur::all();
        $acteursActeur = Acteur::where('categorie','Acteur')->get();
        $acteursRealisateur = Acteur::where('categorie','Producteur')->get();
        $acteursProducteur = Acteur::where('categorie','Réalisateur')->get();
        return view('acteur.index',compact('acteurs','acteursActeur','acteursProducteur','acteursRealisateur'));


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
                        $uploadedFile = $request->file('photo');
                         $nomFichierUnique = str_replace(' ', '_',$acteur->nom) . '-' . uniqid() . '.' . $uploadedFile->extension();


                            try{
                                $request->photo->move(public_path('img/acteurs'), $nomFichierUnique);

                            }
                            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e){
                                Log::debug("Erreur lors du téléversement du fichier. ", [$e]);
                                
                            }
                        $acteur->photo = $nomFichierUnique;
                        $acteur->save();
                        
                    }
                    catch (\Throwable $e) {
                        //Gérer l'erreur
                        Log::debug($e);
                        return redirect()->route('film.index');


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
                        $uploadedFile = $request->photo;
                        $nomFichierUnique = str_replace(' ', '_',$acteur->nom) . '-' . uniqid() . '.' . $uploadedFile->extension();

                        $acteur->nom = $request->nom;
                        $acteur->date_naissance = $request->date_naissance; 
                        $acteur->lieux = $request->lieux; 
                        $acteur->photo = $nomFichierUnique;
                        $acteur->categorie = $request->categorie;

                        $acteur->save();
                        try{
                            $request->photo->move(public_path('img/acteurs'), $nomFichierUnique);

                        }
                        catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e){
                            Log::debug("Erreur lors du téléversement du fichier. ", [$e]);
                            
                        }
                        
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
    public function destroy($id)
    {

        try{
                  $acteur = Acteur::findOrFail($id);
                  $this->removeImage($acteur->photo);
                  $acteur->delete();
                  

                }
        catch(\Throwable $e){
                    Log::debug($e);
                    //TODO : Afficher un message d'erreur
                   return redirect()->route('acteur.show',$id)->with('erreur',"Supprimez " . $acteur->nom . " de tout les films, avant de supprimez"); 
                 }
                return redirect()->route('film.index')->with('message', "Suppression de " . $acteur->nom . " réussi!");
    }


    
    private function removeImage($name){
        $file =public_path('img/acteurs/'.$name);
        $img=File::delete($file);
    }
}
