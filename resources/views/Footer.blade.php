<footer class="footer mt-auto py-4" style="background-color: var(--primary-green); color: white;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3">
                <h5 class="mb-3">
                    <i class="fas fa-leaf me-2"></i>BOUCHERASHOP
                </h5>
                <p>Votre destination pour des produits de beauté 100% naturels et écologiques.</p>
            </div>
            <div class="col-md-4 mb-3">
                <h5 class="mb-3">Liens rapides</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-light text-decoration-none">Accueil</a></li>
                    <li><a href="{{ route('produits') }}" class="text-light text-decoration-none">Produits</a></li>
                    <li><a href="{{ route('about') }}" class="text-light text-decoration-none">À propos</a></li>
                    <li><a href="{{ route('contact') }}" class="text-light text-decoration-none">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-3">
                <h5 class="mb-3">Newsletter</h5>
                <p>Abonnez-vous pour recevoir nos offres spéciales</p>
                <div class="input-group">
                    <input type="email" class="form-control" placeholder="Votre email">
                    <button class="btn btn-light" type="button">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </div>
        </div>
        <hr class="bg-light">
        <div class="text-center pt-3">
            <p class="mb-0">&copy; 2026 - BOUCHERASHOP - Site E-commerce Laravel. Tous droits réservés.</p>
            <p class="mb-0">
                <i class="fas fa-heart text-danger mx-1"></i>
                Fait avec passion pour la beauté naturelle
            </p>
        </div>
    </div>
</footer>