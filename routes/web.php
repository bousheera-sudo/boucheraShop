<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
})->name('home');

Route::get('/produits', function () {
    $products = [
        [
            'id' => 1,
            'name' => 'Crème hydratante',
            'price' => 25,
            'description' => 'Crème hydratante naturelle pour le visage',
        ],
        [
            'id' => 2,
            'name' => 'Huile essentielle',
            'price' => 15,
            'description' => 'Huile essentielle pure et naturelle',
        ],
        [
            'id' => 3,
            'name' => 'Masque visage',
            'price' => 20,
            'description' => 'Masque visage naturel et régénérant',
        ],
        [
            'id' => 4,
            'name' => 'Savon Naturel',
            'price' => 18,
            'description' => 'Savon artisanal à base d\'huiles végétales',
        ],
        [
            'id' => 5,
            'name' => 'Brume Florale',
            'price' => 30,
            'description' => 'Brume rafraîchissante aux extraits de fleurs',
        ],
        [
            'id' => 6,
            'name' => 'Gommage Corporel',
            'price' => 35,
            'description' => 'Gommage exfoliant aux graines naturelles',
        ]
    ];
    
    return view('Produits', ['products' => $products]);
})->name('produits');

Route::get('/about', function () {
    return view('About');
})->name('about');

Route::get('/contact', function () {
    return view('Contact');
})->name('contact');