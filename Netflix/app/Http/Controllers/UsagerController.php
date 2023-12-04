<?php

namespace App\Http\Controllers;

use App\Models\Acteur;
use App\Models\Film;
use Illuminate\Http\Request;
use App\Http\Requests\UsagerRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Usager;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsagerController extends Controller
{
    public function index(){
        $users = Usager::all();
        return view('usager.index',['users'=>$users]);
    }

    /**
     * Display a listing of the resource.
     */
    public function showLoginForm()
    {
        return view('usager.login');
    }

    public function login(Request $request){

        $data = Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ]);

        if($data){
            return redirect()->route('film.index') -> with('message',"Connexion réussie");
        }else{
            return back()->withErrors('informations invalides');
        }
    }

    public  function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('showLoginForm');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('usager.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UsagerRequest $request)
    {
        try{
            $usager = new Usager($request->all());
            $usager->save();
            return redirect()->route('usager.index');
        }
        catch(\Throwable $e){
            //yup
        }
        return redirect()->route('film.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('usager.edit',['user'=>Usager::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UsagerRequest $request, string $id)
    {
        try{

            $usager = Usager::find($id);

            $usager->nom = $request->nom;
            $usager->prenom = $request->prenom;
            $usager->nomUsager = $request->nomUsager;
            $usager->email = $request->email;
            $usager->role = $request->role;
            $usager->password = Hash::make( $request->password);
            $usager->save();

            return redirect()->route('usager.index')->with('message','film'.$usager->nom.' modifié');

        }catch (\Throwable $e){
            return  redirect()->back()->withErrors(["la modification n'a pas fonctionné"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $usager = Usager::findOrFail($id);

            $usager->delete();

            return redirect()->route('usager.index')->with('message','film'.$usager->nom.' supprime');

        }catch(\Throwable $e){
            return redirect()->route('film.index')->withErrors([" la suppression n'a pas fonctionné"]);
        }
    }
}
