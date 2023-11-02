@extends('layouts.app')

  @section('title')
    yup
  @endsection
  
  @section('contenue')

  <div class="wrapper">

    
    <section class="main-container">
    <form method="post" action="{{route('acteur.store')}}">
        @csrf
        <select class="form-control" id="categorie_id" name="categorie_id">
            @foreach($noms as $nom)
                <option value="{{ $nom->id }}">{{ $nom->nom }}</option>
            @endforeach
        </select>



        <button type="submit" class="btnbtn-primary">Enregistrer</button>
    </form>
    </section>

  </div>




  @endsection