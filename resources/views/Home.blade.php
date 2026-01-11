@extends('Master_page')

@section('content')
<div class="container mt-5">

    <!-- HERO SECTION -->
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h1 class="fw-bold text-success">
                Révélez votre beauté, naturellement 🌿
            </h1>
            <p class="lead mt-3">
                Des soins naturels et biologiques pour une peau saine et éclatante.
            </p>
            <a href="/produits" class="btn btn-success btn-lg mt-3">
                Voir nos produits
            </a>
        </div>

        <div class="col-md-6 text-center">
            <img src="https://images.unsplash.com/photo-1556228578-0d85b1a4d571"
                 class="img-fluid rounded shadow"
                 alt="Beauté naturelle">
        </div>
    </div>

    <!-- AVANTAGES -->
    <div class="row text-center">
        <div class="col-md-3">
            <h5>🌿 Naturel</h5>
            <p>Ingrédients naturels</p>
        </div>
        <div class="col-md-3">
            <h5>🧪 Sans danger</h5>
            <p>Sans produits chimiques</p>
        </div>
        <div class="col-md-3">
            <h5>🌍 Écolo</h5>
            <p>Respect de l’environnement</p>
        </div>
        <div class="col-md-3">
            <h5>💚 Qualité</h5>
            <p>Produits certifiés</p>
        </div>
    </div>

</div>
@endsection
