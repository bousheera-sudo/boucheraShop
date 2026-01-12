<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center fw-bold" href="/">
            <span class="brand-logo me-2" aria-hidden="true" style="background-image: url('{{ asset('imgs/logo.png') }}');"></span>
            <span class="brand-text">Beauté Naturelle</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->path() == '/' ? 'active' : '' }}" href="/">
                        🏠 Accueil
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->path() == 'produits' ? 'active' : '' }}" href="/produits">
                         Produits
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->path() == 'about' ? 'active' : '' }}" href="/about">
                         À propos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->path() == 'contact' ? 'active' : '' }}" href="/contact">
                         Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
