<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Models\Produit;

Route::get('/', function () {
    $produits = collect([
        (object)['nom' => 'Crème Hydratante Bio', 'description' => 'Hydrate et nourrit la peau', 'prix' => 120, 'image' => 'https://tse3.mm.bing.net/th/id/OIP.YZeZ8xCz2gAAzq6Q22I4BgHaHa'],
        (object)['nom' => 'Huile d\'Argan', 'description' => 'Soin naturel visage & cheveux', 'prix' => 150, 'image' => 'https://th.bing.com/th/id/OIP._e3NxLEQ7DVZCuQnq9GHkgHaHa?w=208&h=208&c=7&r=0&o=7&pid=1.7&rm=3'],
        (object)['nom' => 'Savon Naturel', 'description' => 'Nettoyage doux et bio', 'prix' => 60, 'image' => 'https://www.le-colibri.net/medias/boutique/1938/agrumes.jpg'],
        (object)['nom' => 'Masque Purifiant', 'description' => 'Purifie et rééquilibre la peau', 'prix' => 80, 'image' => 'https://www.jeunejolie.fr/wp-content/uploads/comment-choisir-le-bon-masque-purifiant-visage-3F-1-1024x683.jpg'],
    ]);
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
