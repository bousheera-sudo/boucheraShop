@extends('Master_page')

@section('title', 'Bienvenue - BOUCHERASHOP')

@section('content')
<div class="container text-center py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="display-4 fw-bold mb-4">Bienvenue sur BOUCHERASHOP</h1>
            <p class="lead mb-4">Laravel est correctement installé et configuré !</p>
            
            <div class="row mt-5">
                <div class="col-md-6 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">
                                <i class="fas fa-store me-2" style="color: var(--primary-green);"></i>
                                Votre boutique
                            </h5>
                            <p class="card-text">Accédez à votre site e-commerce de beauté naturelle</p>
                            <a href="{{ route('home') }}" class="btn btn-add-to-cart">
                                Visiter la boutique
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">
                                <i class="fas fa-box-open me-2" style="color: var(--primary-green);"></i>
                                Produits
                            </h5>
                            <p class="card-text">Découvrez notre catalogue de produits naturels</p>
                            <a href="{{ route('produits') }}" class="btn btn-add-to-cart">
                                Voir les produits
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-5">
                <h4>Structure du projet :</h4>
                <div class="alert alert-info mt-3">
                    <i class="fas fa-info-circle me-2"></i>
                    Ce projet utilise Laravel avec des vues Blade et des routes en Closures.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection