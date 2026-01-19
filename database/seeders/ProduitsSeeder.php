<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produit;

class ProduitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produit::create([
            'nom' => 'Crème Hydratante Bio',
            'description' => 'Hydrate et nourrit la peau',
            'prix' => 120,
            'image' => 'https://tse3.mm.bing.net/th/id/OIP.YZeZ8xCz2gAAzq6Q22I4BgHaHa',
            'categorie' => 'soins_visage'
        ]);

        Produit::create([
            'nom' => "Huile d'Argan",
            'description' => 'Soin naturel visage & cheveux',
            'prix' => 150,
            'image' => 'https://th.bing.com/th/id/OIP._e3NxLEQ7DVZCuQnq9GHkgHaHa',
            'categorie' => 'huiles'
        ]);

        Produit::create([
            'nom' => 'Savon Naturel',
            'description' => 'Nettoyage doux et bio',
            'prix' => 60,
            'image' => 'https://www.le-colibri.net/medias/boutique/1938/agrumes.jpg',
            'categorie' => 'nettoyage'
        ]);

        Produit::create([
            'nom' => 'Masque Purifiant',
            'description' => 'Purifie et rééquilibre la peau',
            'prix' => 80,
            'image' => 'https://www.jeunejolie.fr/wp-content/uploads/comment-choisir-le-bon-masque-purifiant-visage-3F-1-1024x683.jpg',
            'categorie' => 'soins_visage'
        ]);

        Produit::create([
            'nom' => 'Gommage Doux',
            'description' => 'Exfolie sans agresser',
            'prix' => 75,
            'image' => 'https://www.belovesnature.com/wp-content/uploads/2018/01/gommage-doux-visage-soin-du-visage.jpg',
            'categorie' => 'nettoyage'
        ]);

        Produit::create([
            'nom' => 'Sérum Éclat',
            'description' => 'Vitamine C pour un teint lumineux',
            'prix' => 180,
            'image' => 'https://www.beaute3d.com/7983-thickbox_default/academie-scientifique-de-beaute-serum-eclat-12-h.jpg',
            'categorie' => 'soins_visage'
        ]);

        Produit::create([
            'nom' => 'Baume Réparateur',
            'description' => 'Apaise et répare les zones sèches',
            'prix' => 130,
            'image' => 'https://www.huiles-baumes.fr/wp-content/uploads/2018/05/baume_r%C3%A9parateur.jpg',
            'categorie' => 'soins_visage'
        ]);

        Produit::create([
            'nom' => 'Ensemble Découverte',
            'description' => 'Coffret de miniatures',
            'prix' => 220,
            'image' => 'https://tse1.mm.bing.net/th/id/OIP.MvjtlBO3diSEQbSa_6VYyQHaKI',
            'categorie' => 'coffrets'
        ]);

        Produit::create([
            'nom' => 'Lotion Tonique',
            'description' => 'Tonifie et prépare la peau',
            'prix' => 85,
            'image' => 'https://www.foliecosmetic.com/20493-thickbox_default/evoluderm-lotion-tonique-purifiante.jpg',
            'categorie' => 'soins_visage'
        ]);

        Produit::create([
            'nom' => 'Crème de Nuit Régénérante',
            'description' => 'Répare pendant la nuit',
            'prix' => 210,
            'image' => 'https://www.ricaud.com/medias/api/airtable/catalog/product/22691/22691_2.png',
            'categorie' => 'soins_visage'
        ]);

        Produit::create([
            'nom' => 'Déodorant Naturel',
            'description' => 'Protection douce',
            'prix' => 70,
            'image' => 'https://toutnaturellement.ca/wp-content/uploads/2023/03/Deo-zinc-3.jpg',
            'categorie' => 'hygiene'
        ]);

        Produit::create([
            'nom' => 'Coffret Cadeau Deluxe',
            'description' => 'Routine beauté complète',
            'prix' => 350,
            'image' => 'https://corpo.ideecadeauquebec.com/wp-content/uploads/2022/09/coffret-cadeaux-luxueux.jpg',
            'categorie' => 'coffrets'
        ]);

        Produit::create([
            'nom' => 'Masque Nuit Réparateur',
            'description' => 'Restaure pendant la nuit',
            'prix' => 140,
            'image' => 'https://media.vogue.fr/photos/5c2f5b7a46fe0827de4aee74/master/w_1600,c_limit/advanced_night_repair_mask.jpg',
            'categorie' => 'soins_visage'
        ]);

        Produit::create([
            'nom' => 'Spray Protecteur SPF',
            'description' => 'Protection solaire',
            'prix' => 95,
            'image' => 'https://cdn.shopify.com/s/files/NS-SunSecure-SpraySPF50.jpg',
            'categorie' => 'protection'
        ]);

        Produit::create([
            'nom' => 'Brume Hydratante',
            'description' => 'Hydratation instantanée',
            'prix' => 95,
            'image' => 'https://myieva.com/wp-content/uploads/2022/09/BRUME_hydratation.jpg',
            'categorie' => 'soins_visage'
        ]);

        Produit::create([
            'nom' => 'Sac Tissu Réutilisable',
            'description' => 'Écologique et pratique',
            'prix' => 250,
            'image' => 'https://i0.wp.com/filotablo.fr/wp-content/uploads/2020/08/IMG_20200827_180025.jpg',
            'categorie' => 'accessoires'
        ]);

        Produit::create([
            'nom' => 'Huile de Rose',
            'description' => 'Nourrit et adoucit',
            'prix' => 160,
            'image' => 'https://images.unsplash.com/photo-1501004318641-b39e6451bec6',
            'categorie' => 'huiles'
        ]);

        Produit::create([
            'nom' => 'Soin Capillaire Nourrissant',
            'description' => 'Fortifie les cheveux',
            'prix' => 145,
            'image' => 'https://www.indexsante.ca/chroniques/images/soins-des-cheveux-produits-naturels.jpg',
            'categorie' => 'cheveux'
        ]);

        Produit::create([
            'nom' => 'Rouge à Lèvres Mat',
            'description' => 'Longue tenue',
            'prix' => 95,
            'image' => 'https://tse4.mm.bing.net/th/id/OIP._KhfRZcpg2PGeOV_k-CyXQHaHa',
            'categorie' => 'maquillage'
        ]);

        Produit::create([
            'nom' => 'Lot de Lingettes Douces',
            'description' => 'Démaquillage doux',
            'prix' => 55,
            'image' => 'https://tse1.mm.bing.net/th/id/OIP.mTUFTh0UsfkRXj0wQEujBwHaHa',
            'categorie' => 'nettoyage'
        ]);
    }
}
