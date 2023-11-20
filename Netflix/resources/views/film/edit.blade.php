@extends('layouts.app')

@section('title')
  Moifier {{ $film->titre }}
@endsection

@section('contenue')
  <div class="wrapper">


    <!-- MAIN CONTAINER -->
    <section class="main-container" >
      <div class="location" id="home">
          <h1 id="home">Modifier {{ $film->titre }}</h1>
      </div>

      <div class="container mt-5">
      <form class="row" method="POST" action="{{ route('film.update',$film->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="col-md-6">
                <div class="mb-3">
                  <label for="titre" class="form-label">Titre</label>
                  <input value=" {{ $film->titre }}" type="titre" class="form-control @error('titre') is-invalid @enderror" id="titre" name="titre">
                  @error('titre')
                      <div class=" text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="duree" class="form-label">Durée</label>
                  <input value=" {{ $film->duree }}" type="duree" class="form-control @error('duree') is-invalid @enderror" id="duree" name="duree">
                   @error('duree')
                      <div class=" text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="annee" class="form-label">Année</label>
                  <input value="{{ $film->annee }}" type="annee" class="form-control @error('annee') is-invalid @enderror" id="annee" name="annee">
                   @error('annee')
                      <div class=" text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="photo" class="form-label">Photo</label>
                  <input value=" {{ $film->photo }}" type="file" class="form-control @error('photo') is-invalid @enderror " id="photo" name="photo">
                   @error('photo')
                      <div class=" text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="rating" class="form-label">Rating</label>
                  <input value="{{ $film->rating }}" type="rating" class="form-control @error('rating') is-invalid @enderror" id="rating" name="rating">
                   @error('rating')
                      <div class=" text-danger">{{ $message }}</div>
                  @enderror
                </div>

            </div>
            <div class="col-md-6">

              <div class="mb-3">
                    <label for="realisateur" class="form-label">Realisateur</label>
                    <select name="realisateur" id="realisateur"class="form-control">
                    <option selected value="{{ $film->realisateur->id }}">{{ $film->realisateur->nom }}</option>
                      @foreach($acteurs as $acteur)
                        @if ($acteur->id!=$film->realisateur->id)
                         <option value="{{ $acteur->id }}">{{ $acteur->nom }}</option>
                        @endif
                      @endforeach
                    </select>
              </div>

              <div class="mb-3">
                    <label for="producteur" class="form-label">Producteur</label>
                    <select name="producteur" id="producteur"class="form-control">
                    <option selected value="{{ $film->producteur->id }}">{{ $film->producteur->nom }}</option>
                      @foreach($acteurs as $acteur)
                        @if ($acteur->id!=$film->producteur->id)
                          <option value="{{ $acteur->id }}">{{ $acteur->nom }}</option>
                        @endif
                      @endforeach
                    </select>
              </div>

              <div class="mb-3">
                  <label for="categorie" class="form-label">Categorie</label>
                  <input value="{{ $film->categorie }}" type="categorie" class="form-control @error('categorie') is-invalid @enderror" id="categorie" name="categorie">
                   @error('categorie')
                      <div class=" text-danger">{{ $message }}</div>
                  @enderror
              </div>

              <div class="mb-3">
                  <label for="resume" class="form-label">Resume</label>
                  <textarea class="form-control h-25 @error('resume') is-invalid @enderror" name="resume" id="resume">{{ $film->resume }}</textarea>
                   @error('resume')
                      <div class=" text-danger">{{ $message }}</div>
                  @enderror
              </div>


              </div>

              <button class="btn btn-primary" type="submit">Enregistrer</button>
      </form>
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
