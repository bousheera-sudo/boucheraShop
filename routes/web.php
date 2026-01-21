<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\RproductController;
use App\Models\Produit;

Route::get('/', [RproductController::class, 'home']);

Route::get('/about', function () {
    return view('About');
});

Route::get('/contact', function () {
    return view('Contact');
});

// Routes pour les produits
Route::get('/produits', [ProduitController::class, 'index']);
Route::get('/produits/categorie/{cat}', [ProduitController::class, 'byCategorie']);

/**
 * Les routes CRUD (Create, Read, Update, Delete) du contrôleur ressource RproductController.
 * Cela génère automatiquement :
 *    - GET /produits (index)
 *    - GET /produits/create (create)
 *    - POST /produits (store)
 *    - GET /produits/{id} (show)
 *    - GET /produits/{id}/edit (edit)
 *    - PUT/PATCH /produits/{id} (update)
 *    - DELETE /produits/{id} (destroy)
 */
Route::resource('produits', RproductController::class);

/**
 * Pour plus de clarté, vous pouvez surcharger la route GET /produits/create
 * si vous souhaitez un nom particulier, par exemple:
 */
Route::get('/produits/create', [RproductController::class, 'create'])->name('create');
