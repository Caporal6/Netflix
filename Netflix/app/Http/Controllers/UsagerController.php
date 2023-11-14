<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsagerController extends Controller
{
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
    public function store(Request $request)
    {
        try{
            $usager = new Usager($request->all());
            $usager->save();
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
