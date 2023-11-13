@extends('layouts.app')

@section('title')
    Login
@endsection

@section('contenue')
    <div class="wrapper">


        <!-- MAIN CONTAINER -->
        <section class="main-container">

            <div class="container mt-5">

                <form class="row" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="col-md-5 offset-md-4">

                        <div>
                            <h1 id="home" class="mb-3">Connexion</h1>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input value="{{ old('email') }}" type="titre"
                                   class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                            @error('email')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input value="{{ old('password') }}" type="password"
                                   class="form-control @error('password') is-invalid @enderror" id="duree" name="password">
                            @error('password')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button class="btn btn-primary w-100" type="submit">Se connecter</button>
                    </div>

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
