<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActeurRequest;
use App\Models\Acteur;
use App\Models\Film;
use Illuminate\Http\Request;
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
