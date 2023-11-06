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
       <input type="text" class="form-control" id="nom" placeholder="Nom de l'acteur" name="nom">
    </div>

    <div class="form-group">
      <label for="nom">Date de naissance</label>
       <input type="date" class="form-control" id="date_naissance" placeholder="Date de naissance" name="date_naissance">
    </div>

    <div class="form-group">
      <label for="nom">Ville</label>
       <input type="text" class="form-control" id="lieux" placeholder="Ville" name="lieux">
    </div>


    <div class="form-group">
      <label for="nom">Photo</label>
       <input type="text" class="form-control" id="photo" placeholder="Photo" name="photo">
    </div>


    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

    </section>

  </div>




  @endsection