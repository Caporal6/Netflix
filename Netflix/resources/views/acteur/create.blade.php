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
      <label for="nom">Nom de l'acteur</label>
       <input value="{{ old('nom') }}" type="text" class="form-control" id="nom" placeholder="Nom de l'acteur" name="nom">
       @error('nom')
            <div class=" text-danger">{{ $message }}</div>
        @enderror 
    </div>

    <div class="form-group">
      <label for="nom">Date de naissance</label>
       <input value="{{ old('date_naissance') }}" type="date" class="form-control" id="date_naissance" placeholder="Date de naissance" name="date_naissance">
       @error('date_naissance')
            <div class=" text-danger">{{ $message }}</div>
        @enderror 
    </div>

    <div class="form-group">
      <label for="nom">Ville</label>
       <input value="{{ old('lieux') }}" type="text" class="form-control" id="lieux" placeholder="Ville" name="lieux">
       @error('lieux')
            <div class=" text-danger">{{ $message }}</div>
        @enderror 
    </div>


    <div class="form-group">
      <label for="nom">Photo</label>
       <input value="{{ old('photo') }}" type="text" class="form-control" id="photo" placeholder="Photo" name="photo">
       @error('photo')
            <div class=" text-danger">{{ $message }}</div>
        @enderror 
    </div>


    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

    </section>

  </div>




  @endsection