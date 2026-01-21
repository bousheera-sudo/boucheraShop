@extends('Master_page')

@section('content')
<!-- HERO (Bootstrap) -->
<section class="bg-success text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="display-5 fw-bold mb-3">Révélez votre beauté naturellement</h1>
                <p class="lead mb-4">Des soins naturels et biologiques pour une peau saine et éclatante.</p>
                <a href="/produits" class="btn btn-light btn-lg">Voir nos produits →</a>
            </div>

            <div class="col-md-6 text-center mt-4 mt-md-0">
                <img src="https://images.unsplash.com/photo-1556228578-0d85b1a4d571" class="img-fluid rounded shadow" alt="Beauté naturelle">
            </div>
        </div>

        <!-- AVANTAGES (Bootstrap grid) -->
        <div class="row text-center mt-5">
            <div class="col-6 col-md-3 mb-3">
                <h5>🌿 Naturel</h5>
                <p class="mb-0">Ingrédients naturels</p>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <h5>🧪 Sans danger</h5>
                <p class="mb-0">Sans produits chimiques</p>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <h5>🌍 Écolo</h5>
                <p class="mb-0">Respect de l’environnement</p>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <h5>💚 Qualité</h5>
                <p class="mb-0">Produits certifiés</p>
            </div>
        </div>
    </div>
</section>

<!-- PRODUITS PHares -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Nos Produits Phares</h2>
        <p class="text-center text-muted mb-4">Découvrez notre sélection de produits naturels les plus populaires</p></div>
        <div class="row">
            @foreach($produits as $produit)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    @if(strpos($produit->image, 'http') === 0)
                        <!-- Image Cloudinary -->
                        <img src="{{ $produit->image }}" class="card-img-top" alt="{{ $produit->nom }}" style="height: 200px; object-fit: cover;">
                    @else
                        <!-- Image locale -->
                        <img src="/imgs/{{ $produit->image }}" class="card-img-top" alt="{{ $produit->nom }}" style="height: 200px; object-fit: cover;">
                    @endif
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $produit->nom }}</h5>
                        <p class="card-text flex-grow-1">{{ substr($produit->description, 0, 50) }}</p>
                        <p class="card-text"><strong>{{ $produit->prix }} MAD</strong></p>
                        <a href="/produits" class="btn btn-success mt-auto">Voir plus</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="/produits" class="btn btn-outline-success btn-lg">Voir tous nos produits</a>
        </div>
    </div>
</section>
@endsection
