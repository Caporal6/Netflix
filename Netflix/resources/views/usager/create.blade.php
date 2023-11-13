@extends('layouts.app')

  @section('title')
    Relation
  @endsection
  
  @section('contenue')

  <div class="wrapper">

    
    <section class="main-container">
    <form method="post" action="{{ route('acteur.store') }}">
    @csrf
    <div class="form-group">
      <label for="nom">email</label>
       <input value="{{ old('email') }}" type="email" class="form-control" id="email" placeholder="email" name="email">
       @error('email')
            <div class=" text-danger">{{ $message }}</div>
        @enderror 
    </div>

    <div class="form-group">
      <label for="nom">Nom</label>
       <input value="{{ old('nom') }}" type="text" class="form-control" id="nom" placeholder="Date de naissance" name="nom">
       @error('nom')
            <div class=" text-danger">{{ $message }}</div>
        @enderror 
    </div>

    <div class="form-group">
      <label for="nom">Prenom</label>
       <input value="{{ old('prenom') }}" type="text" class="form-control" id="prenom" placeholder="prenom" name="prenom">
       @error('prenom')
            <div class=" text-danger">{{ $message }}</div>
        @enderror 
    </div>


    <div class="form-group">
      <label for="nom">nomUsager</label>
       <input value="{{ old('nomUsager') }}" type="text" class="form-control" id="nomUsager" placeholder="nomUsager" name="nomUsager">
       @error('nomUsager')
            <div class=" text-danger">{{ $message }}</div>
        @enderror 
    </div>

    <div class="form-group">
      <label for="nom">Password</label>
       <input value="{{ old('password') }}" type="text" class="form-control" id="password" placeholder="password" name="password">
       @error('password')
            <div class=" text-danger">{{ $message }}</div>
        @enderror 
    </div>

    <div class="form-group">
      <label for="nom">Role</label>
      <select name="role" id="role">
        <option value="admin">admin</option>
        <option value="normal">normal</option>
        <option value="kid">kid</option>
    </select>
    </div>

    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

    </section>

  </div>




  @endsection