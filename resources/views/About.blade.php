@extends('Master_page')

@section('content')
<!-- HERO -->
<div class="hero-section" style="min-height: 250px; padding: 60px 0;">
    <div class="container">
        <h1 class="text-center fw-bold">À propos de nous</h1>
        <p class="text-center fs-5" style="color: rgba(255,255,255,0.95);">Votre partenaire de confiance en beauté naturelle</p>
    </div>
</div>

<div class="container my-5">
    <!-- Présentation -->
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h2 class="fw-bold mb-4">Qui sommes-nous?</h2>
            <p class="fs-5 mb-3">
                Beauté Naturelle est une boutique spécialisée dans les produits cosmétiques naturels et biologiques.
            </p>
            <p class="fs-5 mb-3">
                Nous croyons que la beauté véritable vient de soins naturels, sans produits chimiques agressifs. 
                Chaque produit est sélectionné avec soin pour garantir qualité et efficacité.
            </p>
            <p class="fs-5">
                Notre mission est de mettre à disposition des soins authentiques et responsables qui prennent soin de votre peau 
                tout en respectant l'environnement.
            </p>
        </div>
        <div class="col-md-6 text-center">
            <div style="font-size: 150px; opacity: 0.3;">🌿</div>
        </div>
    </div>

    <!-- Nos valeurs -->
    <h2 class="text-center fw-bold mb-5">Nos valeurs</h2>
    <div class="row g-4 mb-5">
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 h-100 text-center">
                <div class="card-body">
                    <div style="font-size: 3rem; margin-bottom: 1rem; color: var(--primary-color);">🌿</div>
                    <h5 class="card-title">Naturel</h5>
                    <p class="card-text">100% ingrédients naturels et biologiques certifiés</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 h-100 text-center">
                <div class="card-body">
                    <div style="font-size: 3rem; margin-bottom: 1rem; color: var(--primary-color);">♻️</div>
                    <h5 class="card-title">Écologique</h5>
                    <p class="card-text">Respect de l'environnement et emballages durables</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 h-100 text-center">
                <div class="card-body">
                    <div style="font-size: 3rem; margin-bottom: 1rem; color: var(--primary-color);">✨</div>
                    <h5 class="card-title">Qualité</h5>
                    <p class="card-text">Produits testés et garantis efficaces</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 h-100 text-center">
                <div class="card-body">
                    <div style="font-size: 3rem; margin-bottom: 1rem; color: var(--primary-color);">💚</div>
                    <h5 class="card-title">Engagement</h5>
                    <p class="card-text">Dédiés au bien-être de nos clients</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistiques -->
    <div class="row text-center mb-5" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); color: white; padding: 40px; border-radius: 12px;">
        <div class="col-md-3">
            <h3 class="fw-bold" style="font-size: 2.5rem;">5+</h3>
            <p>Années d'expérience</p>
        </div>
        <div class="col-md-3">
            <h3 class="fw-bold" style="font-size: 2.5rem;">1000+</h3>
            <p>Clients satisfaits</p>
        </div>
        <div class="col-md-3">
            <h3 class="fw-bold" style="font-size: 2.5rem;">50+</h3>
            <p>Produits naturels</p>
        </div>
        <div class="col-md-3">
            <h3 class="fw-bold" style="font-size: 2.5rem;">100%</h3>
            <p>Satisfaction garantie</p>
        </div>
    </div>

    <!-- Appel à l'action -->
    <div class="text-center mt-5">
        <h3 class="fw-bold mb-3">Prêt à découvrir nos produits?</h3>
        <a href="/produits" class="btn btn-primary btn-lg fw-bold">Voir nos produits →</a>
    </div>
</div>
@endsection
