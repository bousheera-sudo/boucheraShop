<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductRequest;
use App\Models\Produit;
use Illuminate\Http\Request;
use Cloudinary\Cloudinary;

class RproductController extends Controller
{
    /**
     * Affiche la page d'accueil avec tous les produits.
     */
    public function home()
    {
        // On récupère tous les produits pour la page d'accueil
        $produits = Produit::all();

        // On renvoie la vue 'Home.blade.php' avec les produits
        return view('Home', compact('produits'));
    }

    /**
     * Affiche la liste paginée des produits (méthode index).
     */
    public function index()
    {
        // On récupère 4 produits par page
        $produits = Produit::paginate(4);

        // On renvoie la vue 'Produits.blade.php' avec les produits
        return view('Produits', compact('produits'));
    }

    /**
     * Affiche le formulaire pour créer un nouveau produit.
     */
    public function create()
    {
        // Retourne la vue 'Addproduit.blade.php'
        return view('Addproduit');
    }

    /**
     * Enregistre un nouveau produit dans la base (Store).
     */
    public function store(AddProductRequest $request)
    {
        // 1. Valider les champs via la Form Request
        $request->validated();

        // 2. Récupérer les valeurs des champs
        $nom       = $request->input('nom');
        $prix      = $request->input('prix');
        $categorie = $request->input('categorie');
        // getClientOriginalName() retourne le nom d’origine de l’image uploadée
        $image     = $request->file('image')->getClientOriginalName();

        // 3. Créer un nouvel objet Produit
        $Produit = new Produit();
        $Produit->nom       = $nom;
        $Produit->prix      = $prix;
        $Produit->categorie = $categorie;
        $Produit->image     = $image;

        // 4. Enregistrer dans la table 'produits'
        $Produit->save();

        // 5. Déplacer l’image dans le dossier public/imgs
        $request->file('image')->move(public_path('imgs'), $image);

        // 6. Retourner à la même page avec un message flash de succès
        return back()->with('success', 'You have successfully added a new Product.');
    }

    /**
     * Affiche un produit précis (Show).
     */
    public function show(string $id)
    {
        $produit = Produit::find($id);
        return view('showproduit', compact('produit'));
    }

    /**
     * Formulaire d’édition (Edit).
     */
    public function edit(string $id)
    {
        $produit = Produit::find($id);
        return view('editproduit')->with('produit', $produit);
    }

    /**
     * Mettre à jour un produit en base (Update).
     */
    public function update(AddProductRequest $request, string $id)
    {
        // Validation des champs
        $request->validated();

        // Récupérer le produit à modifier
        $produit = Produit::find($id);

        // Mise à jour des champs
        $produit->nom = $request->input('nom');
        $produit->prix = $request->input('prix');
        $produit->categorie = $request->input('categorie');

        // Gestion de l'image si uploadée
        if ($request->hasFile('image')) {
            $image = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('imgs'), $image);
            $produit->image = $image;
        }

        $produit->save();

        return back()->with('successupdate', 'Produit mis à jour avec succès.');
    }

    /**
     * Supprimer un produit (Destroy).
     */
    public function destroy(string $id)
    {
        // Récupérer le produit via l'ID
        $produit = Produit::find($id);
        // Supprimer le produit
        $produit->delete();
        return back()->with('successdelete', 'Produit supprimé avec succès.');
    }
}