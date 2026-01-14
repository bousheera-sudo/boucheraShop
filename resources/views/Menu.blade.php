<nav class="navbar navbar-expand-lg navbar-dark navbar-green">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center fw-bold" href="{{ url('/') }}">
      <span class="brand-logo me-2" aria-hidden="true" style="background-image: url('/imgs/logo.png');"></span>
      <span class="brand-text text-white">Beauté Naturelle</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ request()->path() == '/' ? 'active' : '' }}" href="/">  <i class="fas fa-home me-1"></i> Accueil</a>
          
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->path() == 'produits' ? 'active' : '' }}" href="/produits"><i class="fas fa-spa me-1"></i> Produits</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->path() == 'about' ? 'active' : '' }}" href="/about"> <i class="fas fa-info-circle me-1"></i> À propos </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->path() == 'contact' ? 'active' : '' }}" href="/contact"><i class="fas fa-envelope me-1"></i> Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>