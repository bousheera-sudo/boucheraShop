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
@endsection
