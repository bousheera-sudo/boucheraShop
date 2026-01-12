@extends('Master_page')

@section('title', 'Bienvenue - Beauté Naturelle')

@section('content')
<!-- HERO SECTION -->
<div class="hero-section" style="min-height: 500px; padding: 100px 0;">
    <div class="container">
        <div class="row align-items-center h-100">
            <div class="col-md-6">
                <h1 class="fw-bold mb-4" style="font-size: 3.5rem;">Bienvenue chez Beauté Naturelle</h1>
                <p class="fs-5 mb-4" style="color: rgba(255,255,255,0.95);">Découvrez une sélection complète de produits cosmétiques naturels et biologiques pour votre bien-être.</p>
                <div class="d-flex gap-3">
                    <a href="{{ route('home') }}" class="btn btn-light btn-lg fw-bold" style="color: var(--primary-color);">Accueil</a>
                    <a href="{{ route('produits') }}" class="btn btn-light btn-lg fw-bold" style="color: var(--primary-color);">Produits</a>
                </div>
            </div>
            <div class="col-md-6 text-center d-none d-md-block">
                <div style="font-size: 200px; opacity: 0.15;">🌿</div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <h2 class="text-center fw-bold mb-5">Accès rapide</h2>
    <div class="row g-4">
        <!-- Boutique Card -->
        <div class="col-md-4">
            <div class="card h-100 border-0" style="transition: all 0.3s ease;">
                <div class="card-body text-center p-4">
                    <div style="font-size: 4rem; margin-bottom: 1rem; color: var(--primary-color);">🛍️</div>
                    <h5 class="card-title fw-bold mb-3">Notre Boutique</h5>
                    <p class="card-text mb-4">Explorez notre sélection complète de soins naturels et biologiques pour tous les types de peau.</p>
                    <a href="{{ route('home') }}" class="btn btn-primary fw-bold w-100">Visiter la boutique</a>
                </div>
            </div>
        </div>

        <!-- Produits Card -->
        <div class="col-md-4">
            <div class="card h-100 border-0" style="transition: all 0.3s ease;">
                <div class="card-body text-center p-4">
                    <div style="font-size: 4rem; margin-bottom: 1rem; color: var(--primary-color);">✨</div>
                    <h5 class="card-title fw-bold mb-3">Nos Produits</h5>
                    <p class="card-text mb-4">Découvrez notre catalogue de plus de 50 produits certifiés et sélectionnés avec soin.</p>
                    <a href="{{ route('produits') }}" class="btn btn-primary fw-bold w-100">Voir les produits</a>
                </div>
            </div>
        </div>

        <!-- À propos Card -->
        <div class="col-md-4">
            <div class="card h-100 border-0" style="transition: all 0.3s ease;">
                <div class="card-body text-center p-4">
                    <div style="font-size: 4rem; margin-bottom: 1rem; color: var(--primary-color);">💚</div>
                    <h5 class="card-title fw-bold mb-3">Notre Mission</h5>
                    <p class="card-text mb-4">Nous mettons à disposition des soins authentiques, responsables et respectueux de l'environnement.</p>
                    <a href="/about" class="btn btn-primary fw-bold w-100">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="row mt-5" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); color: white; padding: 40px; border-radius: 12px;">
        <div class="col-md-6 mb-3 mb-md-0">
            <h4 class="fw-bold mb-3">✅ Qualité Garantie</h4>
            <p>Tous nos produits sont certifiés bio et testés pour garantir votre satisfaction.</p>
        </div>
        <div class="col-md-6">
            <h4 class="fw-bold mb-3">🌍 Écologiquement Responsable</h4>
            <p>Emballages durables et démarche environnementale respectueuse de la nature.</p>
        </div>
    </div>

    <!-- Info Message -->
    <div class="alert mt-5" style="background-color: var(--secondary-color); border: 2px solid var(--accent-color);">
        <div class="text-center">
            <h5 class="fw-bold mb-2">Bienvenue sur Beauté Naturelle</h5>
            <p class="mb-0">Plateforme e-commerce moderne pour vos soins naturels et biologiques. Navigation facile, paiement sécurisé, livraison rapide.</p>
        </div>
    </div>
</div>

@endsection