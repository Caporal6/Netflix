@extends('layouts.app')

  @section('title')
    acteur - {{ $acteur->nom }} 
  @endsection
  
  @section('contenue')
  <div class="wrapper">


    
    <!-- MAIN CONTAINER -->
    <section class="main-container" >
      <div class="location" id="home">
           <h1 id="home">{{ $acteur->nom }}</h1>
      </div>
      
      <div class="container">
      <div class="row">
            <div class="col-md-6">
              <img src="{{ $acteur->photo }}" alt="" class="img-fluid w-100 h-100">
            </div>
            <div class="col-md-5 offset-md-1">
             
               <div>
                  <span class="text-secondary">ville</span>
                  <h2>{{ $acteur->lieux }}</h2>
              </div>
              <div>
                  <span class="text-secondary">date de naissance</span>
                  <h2>{{ $acteur->date_naissance }}</h2>
              </div>
             
              <div class="mt-2">
                  <span class="text-secondary d-block">films</span> 

                 <div class="d-flex flex-row justify-content-evenly">
                     @foreach($acteur->films as $film)
                    
                      <div class="px-2">
                        <a href="{{ route('film.show',$film) }}" class="show_acteur_link">
                        <h5 class="text-white">{{ $film->titre }}</h5>
                        <img src="{{ $film->photo }}" alt="" class="w-50 h-50 img-fluid">
                        </a>
                      </div>
                   
                  @endforeach
                 </div> 

                <div class="mt-2">
                    <a href="{{ route('acteur.edit',[$acteur])}}" class="btn btn-primary">Modifier</a>
                </div>



              </div>
            </div>
      </div>
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
    </footer>
  </div>
  @endsection
