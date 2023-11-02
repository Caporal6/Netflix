@extends('layouts.app')

  @section('title')
    Films
  @endsection
  
  @section('contenue')
  <div class="wrapper">

    
    <!-- MAIN CONTAINER -->
    <section class="main-container" >
      <div class="location" id="home">
          @if(session('create'))
            <div class="w-100">
              <span class="alert alert-success">{{ session('create') }}</span>
            </div>
          @endif
          <h1 id="home">Populair sur Netflix</h1>
          <div class="box">


          @if(count($films))
              @foreach($films as $film)

              <a href="{{ route('film.show',$film) }}"><img src="{{$film->photo}}"></a>
                  
              @endforeach
          @else
            <p>marche pas</p>
          @endif

      
          </div>
      </div>
      

      <h1 id="myList">Actions</h1>
      <div class="box">
      @if(count($filmsAC))
              @foreach($filmsAC as $film)
              <a href="{{ route('film.show',$film) }}"><img src="{{$film->photo}}"></a>
              @endforeach
          @else
            <p>marche pas</p>
          @endif                   
      </div>
      
      <h1 id="tvShows">Aventures</h1>
      <div class="box">
      @if(count($filmsAV))
              @foreach($filmsAV as $film)
              <a href="{{ route('film.show',$film) }}"><img src="{{$film->photo}}"></a>
              @endforeach
          @else
            <p>marche pas</p>
      @endif         
      </div>
      

      <h1 id="movies">Horreurs</h1>
      <div class="box">

      @if(count($filmsHR))
              @foreach($filmsHR as $film)
              <a href="{{ route('film.show',$film) }}"><img src="{{$film->photo}}"></a>
              @endforeach
          @else
            <p>marche pas</p>
          @endif              
      </div>


      <h1 id="home">Comédie</h1>
          <div class="box">


          @if(count($filmsCM))
              @foreach($filmsCM as $film)

              <a href="{{ route('film.show',$film) }}"><img src="{{$film->photo}}"></a>
                  
              @endforeach
          @else
            <p>marche pas</p>
          @endif

      
          </div>


          <h1 id="home">Amour</h1>
          <div class="box">


          @if(count($filmsAM))
              @foreach($filmsAM as $film)

              <a href="{{ route('film.show',$film) }}"><img src="{{$film->photo}}"></a>
                  
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
    </footer>
  </div>
  @endsection
