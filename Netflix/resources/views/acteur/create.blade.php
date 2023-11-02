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
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

    </section>

  </div>




  @endsection