@extends('Master_page')

@section('title', 'Accueil')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="text-center mb-4">Bienvenue sur Beauté Naturelle</h2>
            <p class="text-center lead">Découvrez nos produits de beauté naturels et authentiques, conçus pour prendre soin de votre peau et de vos cheveux de manière durable et respectueuse de l'environnement.</p>
            <div class="text-center mt-4">
                <a href="/produits/beaute" class="btn btn-custom btn-lg">Voir nos Produits</a>
            </div>
        </div>
    </div>
</div>
@endsection
