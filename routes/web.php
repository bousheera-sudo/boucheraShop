<?php

use Illuminate\Support\Facades\Route;

/* Page d'accueil */
Route::get('/', function () {
    return view('Home');
});

/* Page À propos */
Route::get('/about', function () {
    return view('About');
});

/* Page Contact */
Route::get('/contact', function () {
    return view('Contact');
});

/* Route dynamique produits */
Route::get('/produits/{cat}', function ($cat) {

    $produits = [];

    if ($cat == 'beaute') {
        $produits = [
            ["nom" => "Crème hydratante", "prix" => 25, "image" => "creme_hydratante.jpg"],
            ["nom" => "Huile essentielle", "prix" => 15, "image" => "huile_essentielle.jpg"],
            ["nom" => "Masque visage", "prix" => 20, "image" => "masque_visage.jpg"],
        ];
    }
    else {
        abort(404);
    }

    return view('Produits', [
        'products' => $produits,
        'categorie' => $cat
    ]);
});
