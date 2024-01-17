  <nav id="navbar" class="navbar navbar-expand-lg bg-transparent navbar-light fixed-top testo-nav">
    <div class="container">
      <a style="width:150px" href="#"><img class="w-75" src="img/Logo_navbar.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item  mx-3">
            <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link {{ Route::currentRouteName() == 'articles.index' ? 'active' : '' }} " href="{{ route('articles.index') }}">Articoli</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link {{ Route::currentRouteName() == 'works.index' ? 'active' : '' }} " href="{{ route('works.index') }}">Lavori</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link {{ Route::currentRouteName() == 'portfolio' ? 'active' : '' }} " href="{{ route('portfolio') }}">Portfolio</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link {{ Route::currentRouteName() == 'contacts' ? 'active' : '' }} " href="{{ route('contacts') }}">Contatti</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-0">
          <li>
            <i class="fa-brands fa-twitter"></i>
          </li>
          <li>
            <i class="fa-brands fa-facebook"></i>
          </li>
          <li>
            <i class="fa-brands fa-instagram"></i>
          </li>
        </ul>
      </div>
    </div>
  </nav>
