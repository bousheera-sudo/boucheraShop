@extends('Master_page')

@section('title', 'BOUCHERASHOP - Nos Produits')

@section('content')
<!-- Section Hero -->
<section class="hero-section">
    <div class="container">
        <h1 class="display-4 fw-bold mb-3">Nos Produits de Beauté Naturelle</h1>
        <p class="lead">Découvrez notre gamme complète de produits naturels pour votre bien-être</p>
    </div>
</section>

<!-- Section Produits -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            @foreach($products as $product)
            <div class="col-md-4 col-lg-4">
                <div class="product-card p-4 text-center h-100">
                    <div class="mb-3">
                        <i class="fas fa-spa fa-3x" style="color: var(--primary-green);"></i>
                    </div>
                    <h4 class="mb-3">{{ $product['name'] }}</h4>
                    <p class="text-muted mb-3">{{ $product['description'] }}</p>
                    <div class="product-price mb-3">
                        Prix: <strong>{{ $product['price'] }} DH</strong>
                    </div>
                    <button 
                        class="btn btn-add-to-cart"
                        onclick="addToCart({{ $product['id'] }}, '{{ $product['name'] }}', {{ $product['price'] }})">
                        <i class="fas fa-cart-plus me-2"></i>Ajouter au Panier
                    </button>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Pagination (exemple) -->
        <nav class="mt-5" aria-label="Navigation des produits">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Précédent</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Suivant</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
@endsection