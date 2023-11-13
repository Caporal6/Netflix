<html>
<head>
    <meta charset="utf-8"/>
    <meta lang="fr">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"
            integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9"
            crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
<!-- HEADER -->
<header>
    <div class="netflixLogo">
        <a id="logo" href="#home"><img
                src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/logo.PNG?raw=true" alt="Logo Image"></a>
    </div>
    <nav class="main-nav">
        @auth
            @if(Auth::user()->role=='admin')
                <a href="{{ route('film.index') }}">Films</a>
                <a href="{{ route('film.create') }}">Ajouter film</a>
                <a href="{{ route('acteur.create') }}">Ajouter acteur</a>
            @endif

            <a href="{{ route('acteur.index') }}">Acteurs</a>
        @endauth

    </nav>
    <nav class="sub-nav">
        @auth
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger">Deconnexion</button>
            </form>
        @endauth

    </nav>
</header>
<!-- END OF HEADER -->


@yield('contenue')


<footer><h1></h1></footer>
</body>
</html>
