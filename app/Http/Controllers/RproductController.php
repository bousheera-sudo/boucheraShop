<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductRequest;
use App\Models\Produit;
use Illuminate\Http\Request;

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

        // 3. Upload de l'image vers Cloudinary
        $imageUrl = null;
        if ($request->hasFile('image')) {
            try {
                $uploadedFileUrl = cloudinary()->upload($request->file('image')->getRealPath(), [
                    'folder' => 'beauté-naturelle/products',
                    'transformation' => [
                        'width' => 800,
                        'height' => 600,
                        'crop' => 'limit',
                        'quality' => 'auto'
                    ]
                ])->getSecurePath();

                $imageUrl = $uploadedFileUrl;
            } catch (\Exception $e) {
                return back()->with('error', 'Erreur lors de l\'upload de l\'image: ' . $e->getMessage());
            }
        }

        // 4. Créer un nouvel objet Produit
        $Produit = new Produit();
        $Produit->nom       = $nom;
        $Produit->prix      = $prix;
        $Produit->categorie = $categorie;
        $Produit->image     = $imageUrl; // URL Cloudinary au lieu du nom de fichier local

        // 5. Enregistrer dans la table 'produits'
        $Produit->save();

        // 6. Retourner à la même page avec un message flash de succès
        return back()->with('success', 'Produit ajouté avec succès !');
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
            try {
                $uploadedFileUrl = cloudinary()->upload($request->file('image')->getRealPath(), [
                    'folder' => 'beauté-naturelle/products',
                    'transformation' => [
                        'width' => 800,
                        'height' => 600,
                        'crop' => 'limit',
                        'quality' => 'auto'
                    ]
                ])->getSecurePath();

                $produit->image = $uploadedFileUrl;
            } catch (\Exception $e) {
                return back()->with('error', 'Erreur lors de l\'upload de l\'image: ' . $e->getMessage());
            }
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