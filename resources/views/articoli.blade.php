<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Capybath-Blog</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-grigio text-bianco">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img id="logoNavbar" src="/media/logo.png" alt="Logo del sito" class="logo" width="60" height="60"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link nav-custom" aria-current="page" href="{{route('homepage')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-custom" href="{{route('chi.siamo')}}">Chi siamo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-custom" href="{{route('service')}}">Servizi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-custom" href="{{route('blog')}}">Blog</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Cerca" aria-label="Search"/>
                        <button class="btn btn-outline-light" type="submit">Cerca</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="container-fluid bg-body-secondary bg-white-background">
            <div class="row h-75 justify-content-center align-items-center">
                <div class="col-12">
                    <h1 class="text-center display-4 shadow text-grigio">
                        BLOG
                    </h1>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                        @foreach ($articles as $article)
                            <div class="col-12 col-md-3 py-5">
                                <div class="card mx-auto card-custom" style="width: 18rem;">
                                    <img src="{{ $article['img']}}" alt="" class="img-custom">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$article['name']}}</h5>
                                        <p>{{$article['description']}}</p>
                                        <a href="{{route('article.detail', ['id' => $article['id']])}}" class="btn btn-primary btn-white">Leggi l'articolo completo</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>