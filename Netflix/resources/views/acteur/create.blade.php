@extends('layouts.app')

  @section('title')
    Relation
  @endsection
  
  @section('contenue')

  <div class="wrapper">

    
    <section class="main-container">
    <form method="post" action="{{ route('acteur.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group mt-5">
      <label for="nom">Nom de l'acteur</label>
       <input value="{{ old('nom') }}" type="text" class="form-control" id="nom" placeholder="Nom de l'acteur" name="nom">
       @error('nom')
            <div class=" text-danger">{{ $message }}</div>
        @enderror 
    </div>

    <div class="form-group mt-3">
      <label for="nom">Date de naissance</label>
       <input value="{{ old('date_naissance') }}" type="date" class="form-control" id="date_naissance" placeholder="Date de naissance" name="date_naissance">
       @error('date_naissance')
            <div class=" text-danger">{{ $message }}</div>
        @enderror 
    </div>

    <div class="form-group mt-3">
      <label for="nom">Ville</label>
       <input value="{{ old('lieux') }}" type="text" class="form-control" id="lieux" placeholder="Ville" name="lieux">
       @error('lieux')
            <div class=" text-danger">{{ $message }}</div>
        @enderror 
    </div>


    <div class="form-group mt-3 mb-2">
      <label for="imageId" class="form-label">Photo</label>
      <input type="file" class="form-control" id="imageId" name="photo">

       @error('photo')
            <div class=" text-danger">{{ $message }}</div>
        @enderror 
    </div>

    <div class="form-group">
      <label for="categorie">Catégorie</label>
      <input value="{{ old('categorie') }}" type="text" class="form-control" id="categorie" placeholder="Catégorie" name="categorie">

       @error('categorie')
            <div class=" text-danger">{{ $message }}</div>
        @enderror 
    </div>

    <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
</form>

    </section>

  </div>




  @endsection