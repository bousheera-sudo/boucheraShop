<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;

Route::get('/', function () {
    $produits = App\Models\Produit::take(4)->get();
    return view('Home', compact('produits'));
});

Route::get('/about', function () {
    return view('About');
});

Route::get('/contact', function () {
    return view('Contact');
});

// Routes pour les produits
Route::get('/produits', [ProduitController::class, 'index']);
Route::get('/produits/categorie/{cat}', [ProduitController::class, 'byCategorie']);
