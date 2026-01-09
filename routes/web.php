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
            ["nom" => "Crème hydratante", "prix" => 25, "image" => "https://via.placeholder.com/200x150/28a745/ffffff?text=Cre%CC%80me+Hydratante"],
            ["nom" => "Huile essentielle", "prix" => 15, "image" => "https://via.placeholder.com/200x150/20c997/ffffff?text=Huile+Essentielle"],
            ["nom" => "Masque visage", "prix" => 20, "image" => "https://via.placeholder.com/200x150/17a2b8/ffffff?text=Masque+Visage"],
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
