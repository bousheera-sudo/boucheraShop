@extends('Master_page')
@section('title', 'Modifier Produit')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <!-- Header -->
            <div class="text-center mb-4">
                <h1 class="display-5 text-warning">
                    <i class="fas fa-edit me-3"></i>Modifier le Produit
                </h1>
                <p class="text-muted">Modifiez les informations du produit ci-dessous</p>
            </div>

            <!-- Flash Messages -->
            <div class="mb-4">
                @include('incs.flash')
            </div>

            <!-- Main Card -->
            <div class="card shadow-lg border-0">
                <div class="card-header bg-warning text-dark">
                    <h5 class="mb-0">
                        <i class="fas fa-box me-2"></i>Modifier les Détails du Produit
                    </h5>
                </div>

                <div class="card-body p-4">
                    <form method="POST" action="/produits/{{ $produit->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <!-- Nom du produit -->
                            <div class="col-md-6 mb-3">
                                <label for="nom" class="form-label fw-bold">
                                    <i class="fas fa-tag text-warning me-1"></i>Nom du produit <span class="text-danger">*</span>
                                </label>
                                <input id="nom" type="text" class="form-control form-control-lg @error('nom') is-invalid @enderror"
                                       name="nom" placeholder="Entrez le nom du produit" value="{{ old('nom', $produit->nom) }}">
                                @error('nom')
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-triangle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Prix -->
                            <div class="col-md-6 mb-3">
                                <label for="prix" class="form-label fw-bold">
                                    <i class="fas fa-euro-sign text-warning me-1"></i>Prix (MAD) <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <input id="prix" type="number" step="0.01" class="form-control form-control-lg @error('prix') is-invalid @enderror"
                                           name="prix" placeholder="0.00" value="{{ old('prix', $produit->prix) }}">
                                    <span class="input-group-text">MAD</span>
                                </div>
                                @error('prix')
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-triangle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <!-- Catégorie -->
                        <div class="mb-3">
                            <label for="categorie" class="form-label fw-bold">
                                <i class="fas fa-list text-warning me-1"></i>Catégorie <span class="text-danger">*</span>
                            </label>
                            <select id="categorie" class="form-select form-select-lg @error('categorie') is-invalid @enderror" name="categorie">
                                <option value="">Sélectionnez une catégorie</option>
                                <option value="men" {{ old('categorie', $produit->categorie) == 'men' ? 'selected' : '' }}>Homme</option>
                                <option value="women" {{ old('categorie', $produit->categorie) == 'women' ? 'selected' : '' }}>Femme</option>
                                <option value="kids" {{ old('categorie', $produit->categorie) == 'kids' ? 'selected' : '' }}>Enfants</option>
                                <option value="accessories" {{ old('categorie', $produit->categorie) == 'accessories' ? 'selected' : '' }}>Accessoires</option>
                            </select>
                            @error('categorie')
                                <div class="invalid-feedback">
                                    <i class="fas fa-exclamation-triangle me-1"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Image -->
                        <div class="mb-4">
                            <label for="image" class="form-label fw-bold">
                                <i class="fas fa-image text-warning me-1"></i>Image du produit
                            </label>
                            <input id="image" type="file" class="form-control form-control-lg @error('image') is-invalid @enderror"
                                   name="image" accept="image/*" onchange="previewImage(event)">
                            <div class="form-text">
                                Laissez vide pour garder l'image actuelle. Formats acceptés: JPG, PNG, GIF. Taille maximale: 2MB
                            </div>
                            <!-- Image Preview -->
                            <div id="imagePreview" class="mt-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>Image actuelle:</h6>
                                        @if($produit->image)
                                            <img src="/imgs/{{ $produit->image }}" alt="Image actuelle" class="img-thumbnail" style="max-width: 200px; max-height: 200px;">
                                        @else
                                            <p class="text-muted">Aucune image</p>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <h6 id="newImageLabel" style="display: none;">Nouvelle image:</h6>
                                        <img id="previewImg" src="" alt="Aperçu" class="img-thumbnail" style="max-width: 200px; max-height: 200px; display: none;">
                                    </div>
                                </div>
                            </div>
                            @error('image')
                                <div class="invalid-feedback">
                                    <i class="fas fa-exclamation-triangle me-1"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Buttons -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="/produits" class="btn btn-outline-secondary btn-lg me-md-2">
                                <i class="fas fa-arrow-left me-2"></i>Annuler
                            </a>
                            <button type="submit" class="btn btn-warning btn-lg">
                                <i class="fas fa-save me-2"></i>Modifier le produit
                            </button>
                        </div>
                    </form>
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
    background: linear-gradient(135deg, #ffc107, #fd7e14);
    border: none;
    padding: 1.5rem;
}

.form-control:focus, .form-select:focus {
    border-color: #ffc107;
    box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.25);
}

.btn-warning {
    background: linear-gradient(135deg, #ffc107, #fd7e14);
    border: none;
    transition: all 0.3s ease;
}

.btn-warning:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

.invalid-feedback {
    display: block;
}
</style>

<!-- JavaScript for Image Preview -->
<script>
function previewImage(event) {
    const file = event.target.files[0];
    const previewImg = document.getElementById('previewImg');
    const newImageLabel = document.getElementById('newImageLabel');

    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            previewImg.src = e.target.result;
            previewImg.style.display = 'block';
            newImageLabel.style.display = 'block';
        };
        reader.readAsDataURL(file);
    } else {
        previewImg.style.display = 'none';
        newImageLabel.style.display = 'none';
    }
}
</script>

<!-- Inclure jQuery et Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js"></script>
@endsection