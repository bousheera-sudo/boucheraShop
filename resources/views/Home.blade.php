@extends('Master_page')

@section('title', 'BOUCHERASHOP - Accueil')

@section('content')
<!-- Section Hero -->
<section class="hero-section">
    <div class="container">
        <h1 class="display-4 fw-bold mb-4">Bienvenue chez BOUCHERASHOP</h1>
        <p class="lead mb-4">Découvrez notre sélection exclusive de produits de beauté 100% naturels</p>
        <a href="{{ route('produits') }}" class="btn btn-light btn-lg">
            <i class="fas fa-shopping-bag me-2"></i>Voir nos produits
        </a>
    </div>
</section>

<!-- Section Produits en vedette -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title">Produits en Vedette</h2>
        <div class="row g-4">
            @php
                $featuredProducts = [
                    ['name' => 'Crème hydratante', 'price' => 25, 'icon' => 'fa-cream'],
                    ['name' => 'Huile essentielle', 'price' => 15, 'icon' => 'fa-oil-can'],
                    ['name' => 'Masque visage', 'price' => 20, 'icon' => 'fa-spa']
                ];
            @endphp
            
            @foreach($featuredProducts as $product)
            <div class="col-md-4">
                <div class="product-card p-4 text-center">
                    <div class="mb-3">
                        <i class="fas fa-spa fa-3x" style="color: var(--primary-green);"></i>
                    </div>
                    <h4 class="mb-3">{{ $product['name'] }}</h4>
                    <div class="product-price mb-3">
                        {{ $product['price'] }} DH
                    </div>
                    <a href="{{ route('produits') }}" class="btn btn-add-to-cart">
                        <i class="fas fa-eye me-2"></i>Voir le produit
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Section Avantages -->
<section class="py-5" style="background-color: var(--beige);">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4 text-center">
                <i class="fas fa-leaf fa-3x mb-3" style="color: var(--primary-green);"></i>
                <h4>100% Naturel</h4>
                <p>Des ingrédients purs issus de la nature</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-truck fa-3x mb-3" style="color: var(--primary-green);"></i>
                <h4>Livraison Rapide</h4>
                <p>Expédition sous 24h-48h</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-shield-alt fa-3x mb-3" style="color: var(--primary-green);"></i>
                <h4>Paiement Sécurisé</h4>
                <p>Transactions 100% sécurisées</p>
            </div>
        </div>
    </div>
</section>
@endsection