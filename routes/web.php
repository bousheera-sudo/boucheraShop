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
            'image' => 'https://via.placeholder.com/200x150/28a745/ffffff?text=Cre%CC%80me+Hydratante'
        ],
        [
            'id' => 2,
            'name' => 'Huile essentielle',
            'price' => 15,
            'description' => 'Huile essentielle pure et naturelle',
            'image' => 'https://via.placeholder.com/200x150/20c997/ffffff?text=Huile+Essentielle'
        ],
        [
            'id' => 3,
            'name' => 'Masque visage',
            'price' => 20,
            'description' => 'Masque visage naturel et régénérant',
            'image' => 'https://via.placeholder.com/200x150/17a2b8/ffffff?text=Masque+Visage'
        ],
        [
            'id' => 4,
            'name' => 'Savon Naturel',
            'price' => 18,
            'description' => 'Savon artisanal à base d\'huiles végétales',
            'image' => 'https://via.placeholder.com/200x150/6f42c1/ffffff?text=Savon+Naturel'
        ],
        [
            'id' => 5,
            'name' => 'Brume Florale',
            'price' => 30,
            'description' => 'Brume rafraîchissante aux extraits de fleurs',
            'image' => 'https://via.placeholder.com/200x150/e83e8c/ffffff?text=Brume+Florale'
        ],
        [
            'id' => 6,
            'name' => 'Gommage Corporel',
            'price' => 35,
            'description' => 'Gommage exfoliant aux graines naturelles',
            'image' => 'https://via.placeholder.com/200x150/f39c12/ffffff?text=Gommage+Corporel'
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