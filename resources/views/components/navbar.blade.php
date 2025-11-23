<nav class="navbar navbar-expand-lg bg-sabbia">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img id="logoNavbar" src="/media/logo.png" alt="Logo del sito" class="logo" width="60" height="60"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link
                    @if (Route::currentRouteName() == 'homepage')
                    active-custom
                    @endif
                    " aria-current="page" href="{{route('homepage')}}">Homepage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('blog')}}">Blog</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Cerca" aria-label="Search"/>
                <button class="btn btn-custom" type="submit">Cerca</button>
            </form>
        </div>
    </div>
</nav>