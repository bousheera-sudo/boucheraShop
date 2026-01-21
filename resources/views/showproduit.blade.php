@extends('Master_page')
@section('title', 'Détails du Produit')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <!-- Header -->
            <div class="text-center mb-4">
                <h1 class="display-5 text-info">
                    <i class="fas fa-eye me-3"></i>Détails du Produit
                </h1>
                <p class="text-muted">Informations complètes du produit</p>
            </div>

            <!-- Main Card -->
            <div class="card shadow-lg border-0">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-box me-2"></i>{{ $produit->nom }}
                    </h5>
                </div>

                <div class="card-body p-4">
                    <div class="row">
                        <!-- Image -->
                        <div class="col-md-6 mb-4">
                            <div class="text-center">
                                @if($produit->image)
                                    <img src="/imgs/{{ $produit->image }}" alt="{{ $produit->nom }}" class="img-fluid rounded shadow" style="max-height: 400px;">
                                @else
                                    <div class="bg-light rounded d-flex align-items-center justify-content-center" style="height: 300px;">
                                        <i class="fas fa-image fa-4x text-muted"></i>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Details -->
                        <div class="col-md-6">
                            <div class="product-details">
                                <div class="mb-3">
                                    <h6 class="text-muted mb-1">
                                        <i class="fas fa-tag text-info me-2"></i>Nom du produit
                                    </h6>
                                    <h4 class="text-dark">{{ $produit->nom }}</h4>
                                </div>

                                <div class="mb-3">
                                    <h6 class="text-muted mb-1">
                                        <i class="fas fa-list text-info me-2"></i>Catégorie
                                    </h6>
                                    <span class="badge bg-info fs-6">{{ $produit->categorie }}</span>
                                </div>

                                <div class="mb-3">
                                    <h6 class="text-muted mb-1">
                                        <i class="fas fa-euro-sign text-info me-2"></i>Prix
                                    </h6>
                                    <h3 class="text-success fw-bold">{{ $produit->prix }} MAD</h3>
                                </div>

                                <div class="mb-4">
                                    <h6 class="text-muted mb-1">
                                        <i class="fas fa-align-left text-info me-2"></i>Description
                                    </h6>
                                    <p class="text-dark">{{ $produit->description ?? 'Aucune description disponible.' }}</p>
                                </div>

                                <!-- Action Buttons -->
                                <div class="d-grid gap-2">
                                    <a href="/produits/{{ $produit->id }}/edit" class="btn btn-warning btn-lg">
                                        <i class="fas fa-edit me-2"></i>Modifier ce produit
                                    </a>
                                    <a href="/produits" class="btn btn-outline-secondary btn-lg">
                                        <i class="fas fa-arrow-left me-2"></i>Retour à la liste
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom Styles -->
<style>
.card {
    border-radius: 15px;
    overflow: hidden;
}

.card-header {
    background: linear-gradient(135deg, #17a2b8, #20c997);
    border: none;
    padding: 1.5rem;
}

.product-details h6 {
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.badge {
    font-size: 0.9rem;
    padding: 0.5rem 1rem;
}

.btn-lg {
    padding: 0.75rem 1.5rem;
    font-size: 1.1rem;
}

.btn-warning {
    background: linear-gradient(135deg, #ffc107, #fd7e14);
    border: none;
}

.btn-warning:hover {
    background: linear-gradient(135deg, #e0a800, #d39e00);
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}
</style>

@endsection