@extends('Master_page')

@section('content')
<div class="container mt-5">
    <h2 class="text-success text-center mb-4">Nos Produits</h2>

    <div class="row g-4">

        <!-- Produit 1 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1611930022073-b7a4ba5fcccd"
                     class="card-img-top" alt="Crème naturelle">
                <div class="card-body text-center">
                    <h5 class="card-title">Crème Hydratante Bio</h5>
                    <p class="card-text">Hydrate et nourrit la peau.</p>
                    <span class="badge bg-success">120 MAD</span>
                </div>
            </div>
        </div>

        <!-- Produit 2 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1585238342028-4bbc0a3a3d6d"
                     class="card-img-top" alt="Huile naturelle">
                <div class="card-body text-center">
                    <h5 class="card-title">Huile d’Argan</h5>
                    <p class="card-text">Soin naturel visage & cheveux.</p>
                    <span class="badge bg-success">150 MAD</span>
                </div>
            </div>
        </div>

        <!-- Produit 3 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1608248597279-f99d160bfcbc"
                     class="card-img-top" alt="Savon bio">
                <div class="card-body text-center">
                    <h5 class="card-title">Savon Naturel</h5>
                    <p class="card-text">Nettoyage doux et bio.</p>
                    <span class="badge bg-success">60 MAD</span>
                </div>
            </div>
        </div>



        <div class="col-md-4">
    <div class="card h-100 shadow-sm">
        <img src="https://images.unsplash.com/photo-1595428297413-9f6fa6fef90c"
             class="card-img-top" alt="Crème visage bio">
        <div class="card-body text-center">
            <h5 class="card-title">Crème Visage Régénérante</h5>
            <p class="card-text">Hydrate et nourrit la peau.</p>
            <span class="badge bg-success">199 MAD</span>
        </div>
    </div>
</div>

<!-- Produit 2 -->
<div class="col-md-4">
    <div class="card h-100 shadow-sm">
        <img src="https://images.unsplash.com/photo-1608248242900-8f9d6cabd0b4"
             class="card-img-top" alt="Huile d'argan pure">
        <div class="card-body text-center">
            <h5 class="card-title">Huile d'Argan Premium</h5>
            <p class="card-text">Soin naturel visage & cheveux.</p>
            <span class="badge bg-success">300 MAD</span>
        </div>
    </div>
</div>

<!-- Produit 3 -->
<div class="col-md-4">
    <div class="card h-100 shadow-sm">
        <img src="https://images.unsplash.com/photo-1597264535667-6e25a6e4b2a1"
             class="card-img-top" alt="Savon artisanal">
        <div class="card-body text-center">
            <h5 class="card-title">Savon Artisanal au Lait d'Ânesse</h5>
            <p class="card-text">Nettoyage doux et bio.</p>
            <span class="badge bg-success">99 MAD</span>
        </div>
    </div>
</div>

    </div>
</div>
@endsection
