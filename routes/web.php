<?php

use Illuminate\Support\Facades\Route;

/* Page d'accueil */
Route::get('/', function () {
    return view('Home');
});

/* Route dynamique produits */
Route::get('/produits/{cat}', function ($cat) {

    $produits = [];

    if ($cat == 'hicking') {
        $produits = [
            ["nom" => "Sac à dos", "prix" => 200, "image" => "sac_do.jfif"],
            ["nom" => "Tente", "prix" => 300, "image" => "tent.jfif"],
            ["nom" => "Montre GPS", "prix" => 150, "image" => "watch_gps.jfif"],
        ];
    }
    elseif ($cat == 'electromenager') {
        $produits = [
            ["nom" => "Machine à laver", "prix" => 3000, "image" => "machine_lav.jfif"],
            ["nom" => "Four", "prix" => 1500, "image" => "four.jfif"],
            ["nom" => "Micro-onde", "prix" => 1000, "image" => "micro_onde.jfif"],
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
