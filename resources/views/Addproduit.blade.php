@extends('Master_page')
@section('title', 'Ajouter un Produit Naturel')

@section('content')
<div class="container-fluid py-4" style="background: linear-gradient(135deg, #f5f1e8 0%, #e8f5f0 100%); min-height: 100vh;">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <!-- Header avec éléments naturels -->
            <div class="text-center mb-4 position-relative">
                <div class="nature-elements">
                    <i class="fas fa-leaf text-success position-absolute" style="top: -20px; left: 20%; font-size: 2rem; opacity: 0.6;"></i>
                    <i class="fas fa-seedling text-success position-absolute" style="top: -15px; right: 20%; font-size: 1.5rem; opacity: 0.7;"></i>
                </div>
                <h1 class="display-5 text-success" style="font-family: 'Georgia', serif; font-weight: 300;">
                    <i class="fas fa-plus-circle me-3" style="color: #8B7355;"></i>Ajouter un Produit Naturel
                </h1>
                <p class="text-muted" style="font-style: italic;">Découvrez la beauté pure de la nature</p>
            </div>

            <!-- Flash Messages -->
            <div class="mb-4">
                @include('incs.flash')
            </div>

            <!-- Main Card avec style naturel -->
            <div class="card shadow-lg border-0" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px);">
                <div class="card-header text-white position-relative overflow-hidden" style="background: linear-gradient(135deg, #8B7355, #A0916B); border: none; padding: 2rem;">
                    <div class="nature-pattern position-absolute" style="top: 0; right: 0; opacity: 0.1;">
                        <i class="fas fa-spa fa-3x"></i>
                    </div>
                    <h5 class="mb-0 fw-light">
                        <i class="fas fa-leaf me-2"></i>Essence Naturelle
                    </h5>
                    <p class="mb-0 small opacity-75">Créer des soins d'exception</p>
                </div>

                <div class="card-body p-4">
                    <form method="POST" action="/produits" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <!-- Nom du produit -->
                            <div class="col-md-6 mb-4">
                                <label for="nom" class="form-label fw-bold" style="color: #8B7355;">
                                    <i class="fas fa-tag me-1" style="color: #A0916B;"></i>Nom du produit <span class="text-danger">*</span>
                                </label>
                                <input id="nom" type="text" class="form-control form-control-lg border-0 shadow-sm"
                                       style="background: #fefefe; border-radius: 10px;" name="nom" placeholder="Crème hydratante bio..." value="{{ old('nom') }}">
                                @error('nom')
                                    <div class="invalid-feedback d-block">
                                        <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Prix -->
                            <div class="col-md-6 mb-4">
                                <label for="prix" class="form-label fw-bold" style="color: #8B7355;">
                                    <i class="fas fa-euro-sign me-1" style="color: #A0916B;"></i>Prix (MAD) <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <input id="prix" type="number" step="0.01" class="form-control form-control-lg border-0 shadow-sm"
                                           style="background: #fefefe; border-radius: 10px 0 0 10px;" name="prix" placeholder="0.00" value="{{ old('prix') }}">
                                    <span class="input-group-text border-0" style="background: #f8f6f0; border-radius: 0 10px 10px 0; color: #8B7355;">MAD</span>
                                </div>
                                @error('prix')
                                    <div class="invalid-feedback d-block">
                                        <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <!-- Catégorie avec thème naturel -->
                        <div class="mb-4">
                            <label for="categorie" class="form-label fw-bold" style="color: #8B7355;">
                                <i class="fas fa-seedling me-1" style="color: #A0916B;"></i>Catégorie Naturelle <span class="text-danger">*</span>
                            </label>
                            <select id="categorie" class="form-select form-select-lg border-0 shadow-sm"
                                    style="background: #fefefe; border-radius: 10px; color: #8B7355;" name="categorie">
                                <option value="">Choisissez une catégorie</option>
                                <option value="hydratation" {{ old('categorie') == 'hydratation' ? 'selected' : '' }}>🌿 Hydratation</option>
                                <option value="anti-age" {{ old('categorie') == 'anti-age' ? 'selected' : '' }}>🌸 Anti-âge</option>
                                <option value="purete" {{ old('categorie') == 'purete' ? 'selected' : '' }}>🌸 Pureté & Éclat</option>
                                <option value="cheveux" {{ old('categorie') == 'cheveux' ? 'selected' : '' }}>🌾 Cheveux Naturels</option>
                                <option value="corps" {{ old('categorie') == 'corps' ? 'selected' : '' }}>🌿 Soins du Corps</option>
                            </select>
                            @error('categorie')
                                <div class="invalid-feedback d-block">
                                    <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Image avec thème naturel -->
                        <div class="mb-4">
                            <label for="image" class="form-label fw-bold" style="color: #8B7355;">
                                <i class="fas fa-camera-retro me-1" style="color: #A0916B;"></i>Image Naturelle <span class="text-danger">*</span>
                            </label>
                            <input id="image" type="file" class="form-control form-control-lg border-0 shadow-sm"
                                   style="background: #fefefe; border-radius: 10px;" name="image" accept="image/*" onchange="previewImage(event)">
                            <div class="form-text" style="color: #6c757d; font-style: italic;">
                                Partagez la beauté naturelle de votre produit • Formats: JPG, PNG, GIF • Max: 2MB
                            </div>
                            <!-- Image Preview avec style naturel -->
                            <div id="imagePreview" class="mt-3 text-center" style="display: none;">
                                <div class="position-relative d-inline-block">
                                    <img id="previewImg" src="" alt="Aperçu naturel" class="img-fluid rounded shadow"
                                         style="max-width: 250px; max-height: 250px; border: 3px solid #e8f5f0;">
                                    <div class="position-absolute top-0 end-0 bg-success rounded-circle p-2" style="transform: translate(50%, -50%);">
                                        <i class="fas fa-leaf text-white fa-xs"></i>
                                    </div>
                                </div>
                                <p class="text-muted mt-2 small">Votre produit en toute naturalité</p>
                            </div>
                            @error('image')
                                <div class="invalid-feedback d-block">
                                    <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Buttons avec style naturel -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="/produits" class="btn btn-lg shadow-sm" style="background: #f8f6f0; color: #8B7355; border: 1px solid #e8dcc0;">
                                <i class="fas fa-arrow-left me-2"></i>Retour à la Nature
                            </a>
                            <button type="submit" class="btn btn-lg shadow-sm text-white" style="background: linear-gradient(135deg, #8B7355, #A0916B); border: none;">
                                <i class="fas fa-plus me-2"></i>Créer ce Produit Naturel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom Styles Naturels -->
<style>
body {
    font-family: 'Georgia', 'Times New Roman', serif;
}

.card {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(139, 115, 85, 0.1);
}

.form-control:focus, .form-select:focus {
    border-color: #A0916B;
    box-shadow: 0 0 0 0.2rem rgba(160, 145, 107, 0.15);
}

.btn {
    border-radius: 25px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(139, 115, 85, 0.2);
}

.nature-elements i {
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

.invalid-feedback {
    background: #f8d7da;
    border: 1px solid #f5c6cb;
    border-radius: 8px;
    padding: 8px 12px;
    margin-top: 5px;
}
</style>

<!-- JavaScript for Image Preview -->
<script>
function previewImage(event) {
    const file = event.target.files[0];
    const preview = document.getElementById('imagePreview');
    const previewImg = document.getElementById('previewImg');

    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            previewImg.src = e.target.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(file);
    } else {
        preview.style.display = 'none';
    }
}
</script>

<!-- Inclure jQuery et Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js"></script>
@endsection

                <div class="card-body p-4">
                    <form method="POST" action="/produits" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <!-- Nom du produit -->
                            <div class="col-md-6 mb-3">
                                <label for="nom" class="form-label fw-bold">
                                    <i class="fas fa-tag text-success me-1"></i>Nom du produit <span class="text-danger">*</span>
                                </label>
                                <input id="nom" type="text" class="form-control form-control-lg @error('nom') is-invalid @enderror"
                                       name="nom" placeholder="Entrez le nom du produit" value="{{ old('nom') }}">
                                @error('nom')
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-triangle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Prix -->
                            <div class="col-md-6 mb-3">
                                <label for="prix" class="form-label fw-bold">
                                    <i class="fas fa-euro-sign text-success me-1"></i>Prix (MAD) <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <input id="prix" type="number" step="0.01" class="form-control form-control-lg @error('prix') is-invalid @enderror"
                                           name="prix" placeholder="0.00" value="{{ old('prix') }}">
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
                                <i class="fas fa-list text-success me-1"></i>Catégorie <span class="text-danger">*</span>
                            </label>
                            <select id="categorie" class="form-select form-select-lg @error('categorie') is-invalid @enderror" name="categorie">
                                <option value="">Sélectionnez une catégorie</option>
                                <option value="men" {{ old('categorie') == 'men' ? 'selected' : '' }}>Homme</option>
                                <option value="women" {{ old('categorie') == 'women' ? 'selected' : '' }}>Femme</option>
                                <option value="kids" {{ old('categorie') == 'kids' ? 'selected' : '' }}>Enfants</option>
                                <option value="accessories" {{ old('categorie') == 'accessories' ? 'selected' : '' }}>Accessoires</option>
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
                                <i class="fas fa-image text-success me-1"></i>Image du produit <span class="text-danger">*</span>
                            </label>
                            <input id="image" type="file" class="form-control form-control-lg @error('image') is-invalid @enderror"
                                   name="image" accept="image/*" onchange="previewImage(event)">
                            <div class="form-text">
                                Formats acceptés: JPG, PNG, GIF. Taille maximale: 2MB
                            </div>
                            <!-- Image Preview -->
                            <div id="imagePreview" class="mt-3" style="display: none;">
                                <img id="previewImg" src="" alt="Aperçu" class="img-thumbnail" style="max-width: 200px; max-height: 200px;">
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
                            <button type="submit" class="btn btn-success btn-lg">
                                <i class="fas fa-save me-2"></i>Ajouter le produit
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
    background: linear-gradient(135deg, #28a745, #20c997);
    border: none;
    padding: 1.5rem;
}

.form-control:focus, .form-select:focus {
    border-color: #28a745;
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.btn-success {
    background: linear-gradient(135deg, #28a745, #20c997);
    border: none;
    transition: all 0.3s ease;
}

.btn-success:hover {
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
    const preview = document.getElementById('imagePreview');
    const previewImg = document.getElementById('previewImg');

    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            previewImg.src = e.target.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(file);
    } else {
        preview.style.display = 'none';
    }
}
</script>

<!-- Inclure jQuery et Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js"></script>
@endsection