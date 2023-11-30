@extends('layouts.app')

  @section('title')
    Acteurs
  @endsection
  
  @section('contenue')
  <div class="wrapper">

    
    <!-- MAIN CONTAINER -->
    <section class="main-container" >
      <div class="location" id="home">
          <h1 id="home">Tout les Acteurs</h1>
          <div class="box">
 
          @if(count($acteurs))
              @foreach($acteurs as $acteur)

              <a href="{{ route('acteur.show',$acteur) }}"><img src="{{ asset('img/acteurs/' .  $acteur->photo) }}" alt="{{ $acteur->nom}}" title="{{$acteur->nom}}" class="h-100 img-fluid"></a>
                  
              @endforeach
          @else
            <p>marche pas</p>
          @endif
      </div>
    
      <h1 id="myList">Acteurs</h1>
      <div class="box">
      @if(count($acteursActeur))
              @foreach($acteursActeur as $acteurActeur)
              <a href="{{ route('acteur.show',$acteurActeur) }}"><img src="{{ asset('img/acteurs/' .  $acteurActeur->photo) }}" alt="{{ $acteurActeur->nom}}" title="{{$acteurActeur->nom}}" class="h-100 img-fluid"></a>
              @endforeach
          @else
            <p>marche pas</p>
          @endif
      </div>

      <h1 id="myList">Réalisateur</h1>
      <div class="box">
      @if(count($acteursRealisateur))
              @foreach($acteursRealisateur as $acteurRealisateur)
              <a href="{{ route('acteur.show',$acteurRealisateur) }}"><img src="{{ asset('img/acteurs/' .  $acteurRealisateur->photo) }}" alt="{{ $acteurRealisateur->nom}}" title="{{$acteurRealisateur->nom}}" class="h-100 img-fluid"></a>
              @endforeach
          @else
            <p>marche pas</p>
          @endif
      </div>

      <h1 id="myList">Producteur</h1>
      <div class="box">
      @if(count($acteursProducteur))
              @foreach($acteursProducteur as $acteurProducteur)
              <a href="{{ route('acteur.show',$acteurProducteur) }}"><img src="{{ asset('img/acteurs/' .  $acteurProducteur->photo) }}" alt="{{ $acteurProducteur->nom}}" title="{{$acteurProducteur->nom}}" class="h-100 img-fluid"></a>
              @endforeach
          @else
            <p>marche pas</p>
          @endif
      </div>












     
    <!-- END OF MAIN CONTAINER -->

    <!-- LINKS -->
    <section class="link">
      <div class="logos">
        <a href="#"><i class="fab fa-facebook-square fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-instagram fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-twitter fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-youtube fa-2x logo"></i></a>
      </div>
      <div class="sub-links">
        <ul>
          <li><a href="#">Audio and Subtitles</a></li>
          <li><a href="#">Audio Description</a></li>
          <li><a href="#">Help Center</a></li>
          <li><a href="#">Gift Cards</a></li>
          <li><a href="#">Media Center</a></li>
          <li><a href="#">Investor Relations</a></li>
          <li><a href="#">Jobs</a></li>
          <li><a href="#">Terms of Use</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Legal Notices</a></li>
          <li><a href="#">Corporate Information</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </section>
    <!-- END OF LINKS -->

    <!-- FOOTER -->
    <footer>
      <p>&copy 1997-2018 Netflix, Inc.</p>
      <p>Carlos Avila &copy 2018</p>
      <a class="btn btn-default" href="{{ route('acteur.create') }}">Ajouter</a> 

    </footer>
  </div>
  @endsection
