<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <i class="fas fa-leaf me-2"></i>BOUCHERASHOP
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('produits') ? 'active' : '' }}" href="{{ route('produits') }}">Produits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">À propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link position-relative" href="#">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="cart-count">0</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>