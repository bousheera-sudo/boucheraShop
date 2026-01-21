<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produit;
use Faker\Factory as Faker;

class ProduitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $faker = Faker::create();

         // Supprimer tous les produits existants pour éviter les doublons
         Produit::truncate();

    for ($i = 0; $i < 26; $i++) {
        Produit::insert([
            'nom' => $faker->sentence(),
            'description' => $faker->text(200),
            'image' => $faker->imageUrl(),
            'categorie'=>$faker->randomElement(['men','women']),
            'prix'=>$faker->randomFloat(2, 80, 900),
        ]);
    }
    }
}