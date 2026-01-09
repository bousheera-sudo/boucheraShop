@extends('Master_page')

@section('title', 'Produits')

@section('content')
<div class="container">
    <h2 class="mb-4 text-center">Nos Produits de Beauté Naturelle</h2>
    <div class="row">
        @foreach ($products as $item)
        <div class="col-md-4">
            <div class="product-card">
                <img src="{{ asset('imgs/'.$item['image']) }}" alt="{{ $item['nom'] }}">
                <h5>{{ $item['nom'] }}</h5>
                <p>Prix: {{ $item['prix'] }} DH</p>
                <button class="btn btn-custom">Ajouter au Panier</button>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
