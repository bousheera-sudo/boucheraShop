# 🛍️ Beauté Naturelle - Boutique E-commerce

Une boutique en ligne élégante spécialisée dans les produits de beauté naturels, développée avec Laravel 8 et déployée sur Vercel.

## 🌟 Fonctionnalités

- ✅ **CRUD complet** pour la gestion des produits
- ✅ **Thème naturel** avec tons terreux et éléments organiques
- ✅ **Upload d'images** avec stockage local et Cloudinary
- ✅ **Base de données MySQL** avec migrations et seeders
- ✅ **Interface responsive** avec Bootstrap 4
- ✅ **Validation des formulaires** côté serveur
- ✅ **Messages flash** pour le feedback utilisateur
- ✅ **Pagination** des produits
- ✅ **Architecture MVC** propre et maintenable

## 🚀 Déploiement sur Vercel

### Prérequis

1. **Compte Vercel** : [Créer un compte](https://vercel.com)
2. **Repository Git** : Pousser le code sur GitHub/GitLab
3. **Variables d'environnement** configurées dans Vercel

### Configuration des Variables d'Environnement

Dans le dashboard Vercel, allez dans **Settings > Environment Variables** et ajoutez :

```env
APP_NAME="Beauté Naturelle"
APP_ENV=production
APP_KEY=your-generated-app-key
APP_DEBUG=false
APP_URL=https://your-app-name.vercel.app

DB_CONNECTION=mysql
DB_HOST=your-database-host
DB_PORT=3306
DB_DATABASE=your-database-name
DB_USERNAME=your-database-username
DB_PASSWORD=your-database-password

CLOUDINARY_CLOUD_NAME=your-cloudinary-cloud-name
CLOUDINARY_API_KEY=your-cloudinary-api-key
CLOUDINARY_API_SECRET=your-cloudinary-api-secret
```

### Déploiement Automatique

1. Connectez votre repository Git à Vercel
2. Vercel détectera automatiquement la configuration `vercel.json`
3. Le déploiement se lance automatiquement à chaque push

### Structure du Projet

```
├── api/
│   └── lambda.php          # Point d'entrée Vercel
├── app/
│   ├── Http/Controllers/
│   │   └── RproductController.php
│   └── Models/
│       └── Produit.php
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
│   ├── css/
│   ├── imgs/
│   └── js/
├── resources/views/
│   ├── Addproduit.blade.php
│   ├── editproduit.blade.php
│   ├── showproduit.blade.php
│   └── Produits.blade.php
├── routes/
│   └── web.php
├── vercel.json             # Configuration Vercel
└── .vercelignore          # Fichiers à exclure
```

## 🛠️ Développement Local

```bash
# Cloner le repository
git clone https://github.com/your-username/bouchera-shop.git
cd bouchera-shop

# Installer les dépendances
composer install

# Copier le fichier d'environnement
cp .env.example .env

# Générer la clé d'application
php artisan key:generate

# Configurer la base de données dans .env
# ...

# Exécuter les migrations
php artisan migrate

# (Optionnel) Seeder la base de données
php artisan db:seed --class=ProduitsSeeder

# Démarrer le serveur de développement
php artisan serve
```

## 📱 Routes Disponibles

- `GET /` - Page d'accueil
- `GET /produits` - Liste des produits
- `GET /produits/create` - Formulaire d'ajout
- `POST /produits` - Créer un produit
- `GET /produits/{id}` - Afficher un produit
- `GET /produits/{id}/edit` - Modifier un produit
- `PUT /produits/{id}` - Mettre à jour un produit
- `DELETE /produits/{id}` - Supprimer un produit

## 🎨 Thème Naturel

Le design s'inspire de la beauté naturelle avec :
- Palette de couleurs terreuses (#8B7355, #A0916B)
- Icônes FontAwesome (feuilles, graines, fleurs)
- Animations flottantes organiques
- Typographie Georgia pour une touche élégante
- Fond dégradé évoquant la nature pure

## 📊 Base de Données

### Table `produits`
- `id` (primary key)
- `nom` (string)
- `description` (text)
- `prix` (float)
- `image` (string)
- `categorie` (string)
- `timestamps`

### Catégories Disponibles
- 🌿 Hydratation
- 🌸 Anti-âge
- 🌸 Pureté & Éclat
- 🌾 Cheveux Naturels
- 🌿 Soins du Corps

## 🔧 Technologies Utilisées

- **Laravel 8** - Framework PHP
- **MySQL** - Base de données
- **Bootstrap 4** - Framework CSS
- **FontAwesome** - Icônes
- **Cloudinary** - Stockage d'images
- **Vercel** - Plateforme de déploiement
- **Composer** - Gestionnaire de dépendances

## 📝 Scripts Disponibles

```bash
# Développement
php artisan serve              # Démarrer le serveur local
php artisan tinker             # Console interactive

# Base de données
php artisan migrate            # Exécuter les migrations
php artisan migrate:rollback   # Annuler la dernière migration
php artisan db:seed            # Seeder la base de données

# Cache
php artisan config:clear       # Vider le cache de configuration
php artisan cache:clear        # Vider le cache d'application
php artisan route:clear        # Vider le cache des routes
php artisan view:clear         # Vider le cache des vues
```

## 🤝 Contribution

1. Fork le projet
2. Créer une branche feature (`git checkout -b feature/AmazingFeature`)
3. Commit les changements (`git commit -m 'Add some AmazingFeature'`)
4. Push vers la branche (`git push origin feature/AmazingFeature`)
5. Ouvrir une Pull Request

## 📄 Licence

Ce projet est sous licence MIT - voir le fichier [LICENSE](LICENSE) pour plus de détails.

## 📞 Contact

Bouchra Baidouch - [GitHub](https://github.com/bousheera-sudo)

---

⭐ **N'hésitez pas à donner une étoile si ce projet vous plaît !**
- Adresse : 123 Rue de la Beauté, Casablanca, Maroc

Un formulaire de contact simple est fourni pour les utilisateurs.

## Structure du Site

- **Accueil** : Message de bienvenue pour les produits de beauté naturels.
- **Produits** : Liste des produits beauté (Crème hydratante, Huile essentielle, Masque visage).
- **À propos** : Informations sur la mission et les valeurs.
- **Contact** : Formulaire et coordonnées.

## Technologies Utilisées

- **Laravel** : Framework PHP pour le backend et les vues.
- **Bootstrap** : Pour le styling responsive.
- **Vercel** : Pour le déploiement en ligne via GitHub.

## Déploiement

Le site est déployé sur Vercel et accessible via GitHub. La version V1 statique est prête pour les prochaines étapes dynamiques avec base de données.

## Prochaines Étapes

- Introduction des fonctionnalités dynamiques (gestion de produits avec base de données).
- Ajout de paniers d'achat et paiement.
- Amélioration de l'UX/UI.
