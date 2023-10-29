@extends('layouts.app')

  @section('title')
    Films
  @endsection
  
  @section('contenue')
  <div class="wrapper">


    
    <!-- MAIN CONTAINER -->
    <section class="main-container" >
      <div class="location" id="home">
          <h1 id="home">{{ $film->titre }}</h1>
         
      </div>
      
      <div class="container">
      <div class="row">
            <div class="col-md-6">
              <img src="{{ $film->photo }}" alt="" class="img-fluid w-100 h-100">
            </div>
            <div class="col-md-5 offset-md-1">
              <div>
                <span class="text-secondary">categorie</span>
                <h2>{{ $film->categorie }}</h2>
              </div>
             <div>
                <span class="text-secondary">durée</span>
                <h4>{{ $film->duree }} Min</h4>
             </div>
              <div>
                <span class="text-secondary">résumé</span>
                <h4>{{ $film->resume }}</h4>
              </div>
              <div>
                <span class="text-secondary">rating</span>
                <h4>{{ $film->rating }}</h4>
              </div>
              <div>
                <span class="text-secondary">année</span>
                <h4>{{ $film->annee }}</h4>
              </div>
              
              <div>
                  <span class="text-secondary d-block">acteurs</span>
                  
                  @foreach($film->acteurs as $acteur)
                    <span>{{ $acteur->nom }} - </span>
                  @endforeach
            
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
