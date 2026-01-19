@extends('Master_page')

@section('content')
<div class="bg-beige py-5">
    <div class="container mt-5">
        <h2 class="text-success text-center mb-4">Nos Produits</h2>

        <!-- Barre de recherche -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="input-group">
                    <span class="input-group-text bg-success text-white">
                        <i class="fas fa-search"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Rechercher un produit par nom ou description..." id="searchInput">
                    <button class="btn btn-outline-secondary" type="button" id="clearSearch">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div id="searchCount" class="text-muted small mt-2">Total: {{ $produits->total() }} produits</div>
            </div>
        </div>

        <!-- Tableau des produits -->
        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered">
                <thead class="table-success">
                    <tr>
                        <th>Image</th>
                        <th>Nom du Produit</th>
                        <th>Description</th>
                        <th>Prix (MAD)</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="productTableBody">
                    @foreach($produits as $produit)
                    <tr>
                        <td>
                            <img src="{{ $produit->image }}"
                                 alt="{{ $produit->nom }}"
                                 style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                        </td>
                        <td>{{ $produit->nom }}</td>
                        <td>{{ $produit->description }}</td>
                        <td><span class="badge bg-success">{{ $produit->prix }} MAD</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary view-product"
                                    data-bs-toggle="modal"
                                    data-bs-target="#productModal"
                                    data-name="{{ $produit->nom }}"
                                    data-description="{{ $produit->description }}"
                                    data-price="{{ $produit->prix }} MAD"
                                    data-image="{{ $produit->image }}">
                                <i class="fas fa-eye"></i> Voir
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            <nav aria-label="Page navigation">
                <div class="pagination">
                    {{ $produits->links('vendor.pagination.custom') }}
                </div>
            </nav>
        </div>

        <!-- Message quand aucun produit n'est trouvé -->
        <div id="noProductsMessage" class="text-center py-5" style="display: none;">
            <i class="fas fa-search fa-3x text-muted mb-3"></i>
            <h4 class="text-muted">Aucun produit trouvé</h4>
            <p class="text-muted">Essayez avec d'autres termes de recherche</p>
        </div>
    </div>
</div>

<!-- Modal pour voir les détails du produit -->
<div class="modal fade" id="productModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel">Détails du Produit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img id="modalProductImage" src="" alt="" class="img-fluid rounded">
                    </div>
                    <div class="col-md-6">
                        <h4 id="modalProductName"></h4>
                        <p id="modalProductDescription"></p>
                        <p><strong>Prix: <span id="modalProductPrice"></span></strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
