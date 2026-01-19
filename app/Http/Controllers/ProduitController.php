<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    public function index()
    {
        $produits = Produit::paginate(4);
        return view('Produits', compact('produits'));
    }

    public function byCategorie($cat)
    {
        $produits = Produit::where('categorie', $cat)->paginate(4);
        return view('Produits', compact('produits'));
    }
}
