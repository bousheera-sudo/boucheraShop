@extends('Master_page')

@section('content')
<div class="bg-beige py-5">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-success mb-0">Nos Produits</h2>
            <a href="/produits/create" class="btn btn-success">Ajouter un produit</a>
        </div>

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
                            <img src="/imgs/{{ $produit->image }}"
                                 alt="{{ $produit->nom }}"
                                 style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                        </td>
                        <td>{{ $produit->nom }}</td>
                        <td>{{ $produit->description }}</td>
                        <td><span class="badge bg-success">{{ $produit->prix }} MAD</span></td>
                        <td style="display: flex; gap: 5px;">
                            <a class="btn btn-warning btn-sm" href="/produits/{{ $produit->id }}/edit" title="Modifier">
                                <i class="fas fa-edit"></i> Modifier
                            </a>
                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{ $produit->id }}" title="Supprimer">
                                <i class="fas fa-trash"></i> Supprimer
                            </button>
                        </td>
                    </tr>
                    <!-- Modal de suppression -->
                    <div class="modal fade" id="deleteModal-{{ $produit->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel-{{ $produit->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content border-0 shadow-lg">
                                <div class="modal-header bg-danger text-white">
                                    <h5 class="modal-title" id="deleteModalLabel-{{ $produit->id }}">
                                        <i class="fas fa-exclamation-triangle me-2"></i>Confirmation de suppression
                                    </h5>
                                    <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center p-4">
                                    <div class="mb-3">
                                        <i class="fas fa-trash-alt fa-3x text-danger mb-3"></i>
                                    </div>
                                    <h6 class="mb-3">Êtes-vous sûr de vouloir supprimer ce produit ?</h6>
                                    <div class="alert alert-warning">
                                        <strong>Produit:</strong> {{ $produit->nom }}<br>
                                        <strong>Prix:</strong> {{ $produit->prix }} MAD<br>
                                        <strong>Catégorie:</strong> {{ $produit->categorie }}
                                    </div>
                                    <p class="text-muted mb-0">Cette action est irréversible.</p>
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <button type="button" class="btn btn-outline-secondary px-4" data-dismiss="modal">
                                        <i class="fas fa-times me-2"></i>Annuler
                                    </button>
                                    <form action="/produits/{{ $produit->id }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger px-4">
                                            <i class="fas fa-trash me-2"></i>Supprimer définitivement
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $produits->links('vendor.pagination.custom') }}
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

<!-- Custom Styles -->
<style>
.table th {
    background-color: #f8f9fa;
    font-weight: 600;
    border-top: none;
}

.table td {
    vertical-align: middle;
}

.btn-sm {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
}

.btn-warning:hover {
    background-color: #e0a800;
    border-color: #d39e00;
}

.btn-danger:hover {
    background-color: #c82333;
    border-color: #bd2130;
}

.modal-content {
    border-radius: 15px;
}

.alert-warning {
    background-color: #fff3cd;
    border-color: #ffeaa7;
    color: #856404;
}
</style>

@endsection
