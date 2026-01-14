@extends('Master_page')

@section('content')
<div class="bg-beige py-5">
    <div class="container mt-5">
        <h2 class="text-success text-center mb-4">Nos Produits</h2>

        <!-- Barre de recherche -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="input-group">
                    <span class="input-group-text bg-success text-white">
                        <i class="fas fa-search"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Rechercher un produit par nom ou description..." id="searchInput">
                    <button class="btn btn-outline-secondary" type="button" id="clearSearch">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div id="searchCount" class="text-muted small mt-2">Total: 20 produits</div>
            </div>
        </div>

        <!-- Tableau des produits -->
        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered">
                <thead class="table-success">
                    <tr>
                        <th>Image</th>
                        <th>Nom du Produit</th>
                        <th>Description</th>
                        <th>Prix (MAD)</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="productTableBody">
                    <!-- Produit 1 -->
                    <tr>
                        <td>
                            <img src="https://tse3.mm.bing.net/th/id/OIP.YZeZ8xCz2gAAzq6Q22I4BgHaHa?rs=1&pid=ImgDetMain&o=7&rm=3" 
                                 alt="Crème Hydratante Bio" 
                                 style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                        </td>
                        <td>Crème Hydratante Bio</td>
                        <td>Hydrate et nourrit la peau</td>
                        <td><span class="badge bg-success">120 MAD</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary view-product" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#productModal"
                                    data-name="Crème Hydratante Bio"
                                    data-description="Hydrate et nourrit la peau"
                                    data-price="120 MAD"
                                    data-image="https://tse3.mm.bing.net/th/id/OIP.YZeZ8xCz2gAAzq6Q22I4BgHaHa?rs=1&pid=ImgDetMain&o=7&rm=3">
                                <i class="fas fa-eye"></i> Voir
                            </button>
                        </td>
                    </tr>

                    <!-- Produit 2 -->
                    <tr>
                        <td>
                            <img src="https://th.bing.com/th/id/OIP._e3NxLEQ7DVZCuQnq9GHkgHaHa?w=208&h=208&c=7&r=0&o=7&pid=1.7&rm=3" 
                                 alt="Huile d'Argan" 
                                 style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                        </td>
                        <td>Huile d'Argan</td>
                        <td>Soin naturel visage & cheveux</td>
                        <td><span class="badge bg-success">150 MAD</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary view-product" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#productModal"
                                    data-name="Huile d'Argan"
                                    data-description="Soin naturel visage & cheveux"
                                    data-price="150 MAD"
                                    data-image="https://th.bing.com/th/id/OIP._e3NxLEQ7DVZCuQnq9GHkgHaHa?w=208&h=208&c=7&r=0&o=7&pid=1.7&rm=3">
                                <i class="fas fa-eye"></i> Voir
                            </button>
                        </td>
                    </tr>

                    <!-- Produit 3 -->
                    <tr>
                        <td>
                            <img src="https://www.le-colibri.net/medias/boutique/1938/agrumes.jpg" 
                                 alt="Savon Naturel" 
                                 style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                        </td>
                        <td>Savon Naturel</td>
                        <td>Nettoyage doux et bio</td>
                        <td><span class="badge bg-success">60 MAD</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary view-product" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#productModal"
                                    data-name="Savon Naturel"
                                    data-description="Nettoyage doux et bio"
                                    data-price="60 MAD"
                                    data-image="https://www.le-colibri.net/medias/boutique/1938/agrumes.jpg">
                                <i class="fas fa-eye"></i> Voir
                            </button>
                        </td>
                    </tr>

                    <!-- Produit 4 -->
                    <tr>
                        <td>
                            <img src="https://www.jeunejolie.fr/wp-content/uploads/comment-choisir-le-bon-masque-purifiant-visage-3F-1-1024x683.jpg" 
                                 alt="Masque Purifiant" 
                                 style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                        </td>
                        <td>Masque Purifiant</td>
                        <td>Purifie et rééquilibre la peau</td>
                        <td><span class="badge bg-success">80 MAD</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary view-product" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#productModal"
                                    data-name="Masque Purifiant"
                                    data-description="Purifie et rééquilibre la peau"
                                    data-price="80 MAD"
                                    data-image="https://www.jeunejolie.fr/wp-content/uploads/comment-choisir-le-bon-masque-purifiant-visage-3F-1-1024x683.jpg">
                                <i class="fas fa-eye"></i> Voir
                            </button>
                        </td>
                    </tr>

                    <!-- Produit 5 -->
                    <tr>
                        <td>
                            <img src="https://www.belovesnature.com/wp-content/uploads/2018/01/gommage-doux-visage-soin-du-visage.jpg" 
                                 alt="Gommage Doux" 
                                 style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                        </td>
                        <td>Gommage Doux</td>
                        <td>Exfolie sans agresser</td>
                        <td><span class="badge bg-success">75 MAD</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary view-product" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#productModal"
                                    data-name="Gommage Doux"
                                    data-description="Exfolie sans agresser"
                                    data-price="75 MAD"
                                    data-image="https://www.belovesnature.com/wp-content/uploads/2018/01/gommage-doux-visage-soin-du-visage.jpg">
                                <i class="fas fa-eye"></i> Voir
                            </button>
                        </td>
                    </tr>

                    <!-- Produit 6 -->
                    <tr>
                        <td>
                            <img src="https://www.beaute3d.com/7983-thickbox_default/academie-scientifique-de-beaute-serum-eclat-12-h.jpg" 
                                 alt="Sérum Éclat" 
                                 style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                        </td>
                        <td>Sérum Éclat</td>
                        <td>Concentré en vitamine C pour un teint lumineux</td>
                        <td><span class="badge bg-success">180 MAD</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary view-product" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#productModal"
                                    data-name="Sérum Éclat"
                                    data-description="Concentré en vitamine C pour un teint lumineux"
                                    data-price="180 MAD"
                                    data-image="https://www.beaute3d.com/7983-thickbox_default/academie-scientifique-de-beaute-serum-eclat-12-h.jpg">
                                <i class="fas fa-eye"></i> Voir
                            </button>
                        </td>
                    </tr>

                    <!-- Produit 7 -->
                    <tr>
                        <td>
                            <img src="https://www.huiles-baumes.fr/wp-content/uploads/2018/05/baume_r%C3%A9parateur.jpg" 
                                 alt="Baume Réparateur" 
                                 style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                        </td>
                        <td>Baume Réparateur</td>
                        <td>Apaise et répare les zones sèches et abîmées</td>
                        <td><span class="badge bg-success">130 MAD</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary view-product" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#productModal"
                                    data-name="Baume Réparateur"
                                    data-description="Apaise et répare les zones sèches et abîmées"
                                    data-price="130 MAD"
                                    data-image="https://www.huiles-baumes.fr/wp-content/uploads/2018/05/baume_r%C3%A9parateur.jpg">
                                <i class="fas fa-eye"></i> Voir
                            </button>
                        </td>
                    </tr>

                    <!-- Produit 8 -->
                    <tr>
                        <td>
                            <img src="https://tse1.mm.bing.net/th/id/OIP.MvjtlBO3diSEQbSa_6VYyQHaKI?rs=1&pid=ImgDetMain&o=7&rm=3" 
                                 alt="Ensemble Découverte" 
                                 style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                        </td>
                        <td>Ensemble Découverte</td>
                        <td>Coffret de miniatures pour tester nos essentiels</td>
                        <td><span class="badge bg-success">220 MAD</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary view-product" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#productModal"
                                    data-name="Ensemble Découverte"
                                    data-description="Coffret de miniatures pour tester nos essentiels"
                                    data-price="220 MAD"
                                    data-image="https://tse1.mm.bing.net/th/id/OIP.MvjtlBO3diSEQbSa_6VYyQHaKI?rs=1&pid=ImgDetMain&o=7&rm=3">
                                <i class="fas fa-eye"></i> Voir
                            </button>
                        </td>
                    </tr>

                    <!-- Produit 9 -->
                    <tr>
                        <td>
                            <img src="https://www.foliecosmetic.com/20493-thickbox_default/evoluderm-lotion-tonique-purifiante-au-zinc-et-extrait-de-the-vert-250ml.jpg" 
                                 alt="Lotion Tonique" 
                                 style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                        </td>
                        <td>Lotion Tonique</td>
                        <td>Tonifie et prépare la peau aux soins</td>
                        <td><span class="badge bg-success">85 MAD</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary view-product" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#productModal"
                                    data-name="Lotion Tonique"
                                    data-description="Tonifie et prépare la peau aux soins"
                                    data-price="85 MAD"
                                    data-image="https://www.foliecosmetic.com/20493-thickbox_default/evoluderm-lotion-tonique-purifiante-au-zinc-et-extrait-de-the-vert-250ml.jpg">
                                <i class="fas fa-eye"></i> Voir
                            </button>
                        </td>
                    </tr>

                    <!-- Produit 10 -->
                    <tr>
                        <td>
                            <img src="https://www.ricaud.com/medias/api/airtable/catalog/product/22691/22691_2.png" 
                                 alt="Crème de Nuit Régénérante" 
                                 style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                        </td>
                        <td>Crème de Nuit Régénérante</td>
                        <td>Répare et nourrit pendant la nuit</td>
                        <td><span class="badge bg-success">210 MAD</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary view-product" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#productModal"
                                    data-name="Crème de Nuit Régénérante"
                                    data-description="Répare et nourrit pendant la nuit"
                                    data-price="210 MAD"
                                    data-image="https://www.ricaud.com/medias/api/airtable/catalog/product/22691/22691_2.png">
                                <i class="fas fa-eye"></i> Voir
                            </button>
                        </td>
                    </tr>

                    <!-- Produit 11 -->
                    <tr>
                        <td>
                            <img src="https://toutnaturellement.ca/wp-content/uploads/2023/03/Deo-zinc-3.jpg" 
                                 alt="Déodorant Naturel" 
                                 style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                        </td>
                        <td>Déodorant Naturel</td>
                        <td>Protection douce et respectueuse de la peau</td>
                        <td><span class="badge bg-success">70 MAD</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary view-product" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#productModal"
                                    data-name="Déodorant Naturel"
                                    data-description="Protection douce et respectueuse de la peau"
                                    data-price="70 MAD"
                                    data-image="https://toutnaturellement.ca/wp-content/uploads/2023/03/Deo-zinc-3.jpg">
                                <i class="fas fa-eye"></i> Voir
                            </button>
                        </td>
                    </tr>

                    <!-- Produit 12 -->
                    <tr>
                        <td>
                            <img src="https://corpo.ideecadeauquebec.com/wp-content/uploads/2022/09/coffret-cadeaux-luxueux-2023-cadeaux-corporatifs-idee-cadeau-quebec.jpg" 
                                 alt="Coffret Cadeau Deluxe" 
                                 style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                        </td>
                        <td>Coffret Cadeau Deluxe</td>
                        <td>Sélection premium pour offrir une routine complète</td>
                        <td><span class="badge bg-success">350 MAD</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary view-product" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#productModal"
                                    data-name="Coffret Cadeau Deluxe"
                                    data-description="Sélection premium pour offrir une routine complète"
                                    data-price="350 MAD"
                                    data-image="https://corpo.ideecadeauquebec.com/wp-content/uploads/2022/09/coffret-cadeaux-luxueux-2023-cadeaux-corporatifs-idee-cadeau-quebec.jpg">
                                <i class="fas fa-eye"></i> Voir
                            </button>
                        </td>
                    </tr>

                    <!-- Produit 13 -->
                    <tr>
                        <td>
                            <img src="https://media.vogue.fr/photos/5c2f5b7a46fe0827de4aee74/master/w_1600%2Cc_limit/advanced_night_repair_powerfoil_mask_lifestyle_shot_global_editorial_only_expiry_january_2017_jpg_6760_jpeg_9770.jpeg" 
                                 alt="Masque Nuit Réparateur" 
                                 style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                        </td>
                        <td>Masque Nuit Réparateur</td>
                        <td>Restaure l'éclat et la souplesse pendant la nuit</td>
                        <td><span class="badge bg-success">140 MAD</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary view-product" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#productModal"
                                    data-name="Masque Nuit Réparateur"
                                    data-description="Restaure l'éclat et la souplesse pendant la nuit"
                                    data-price="140 MAD"
                                    data-image="https://media.vogue.fr/photos/5c2f5b7a46fe0827de4aee74/master/w_1600%2Cc_limit/advanced_night_repair_powerfoil_mask_lifestyle_shot_global_editorial_only_expiry_january_2017_jpg_6760_jpeg_9770.jpeg">
                                <i class="fas fa-eye"></i> Voir
                            </button>
                        </td>
                    </tr>

                    <!-- Produit 14 -->
                    <tr>
                        <td>
                            <img src="https://cdn.shopify.com/s/files/1/0068/0932/1537/files/NS-SunSecure-SpraySPF50-FicheProduit.jpg?v=1715860952" 
                                 alt="Spray Protecteur SPF" 
                                 style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                        </td>
                        <td>Spray Protecteur SPF</td>
                        <td>Protection légère et non grasse pour une utilisation quotidienne</td>
                        <td><span class="badge bg-success">95 MAD</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary view-product" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#productModal"
                                    data-name="Spray Protecteur SPF"
                                    data-description="Protection légère et non grasse pour une utilisation quotidienne"
                                    data-price="95 MAD"
                                    data-image="https://cdn.shopify.com/s/files/1/0068/0932/1537/files/NS-SunSecure-SpraySPF50-FicheProduit.jpg?v=1715860952">
                                <i class="fas fa-eye"></i> Voir
                            </button>
                        </td>
                    </tr>

                    <!-- Produit 15 -->
                    <tr>
                        <td>
                            <img src="https://myieva.com/wp-content/uploads/2022/09/BRUME_hydratation_intense-AWARD.jpg" 
                                 alt="Brume Hydratante" 
                                 style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                        </td>
                        <td>Brume Hydratante</td>
                        <td>Rafraîchit et hydrate instantanément</td>
                        <td><span class="badge bg-success">95 MAD</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary view-product" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#productModal"
                                    data-name="Brume Hydratante"
                                    data-description="Rafraîchit et hydrate instantanément"
                                    data-price="95 MAD"
                                    data-image="https://myieva.com/wp-content/uploads/2022/09/BRUME_hydratation_intense-AWARD.jpg">
                                <i class="fas fa-eye"></i> Voir
                            </button>
                        </td>
                    </tr>

                    <!-- Produit 16 -->
                    <tr>
                        <td>
                            <img src="https://i0.wp.com/filotablo.fr/wp-content/uploads/2020/08/IMG_20200827_180025.jpg?fit=959%2C1080&ssl=1" 
                                 alt="Sac Tissu Réutilisable" 
                                 style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                        </td>
                        <td>Sac Tissu Réutilisable</td>
                        <td>Pratique et écologique pour vos courses</td>
                        <td><span class="badge bg-success">250 MAD</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary view-product" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#productModal"
                                    data-name="Sac Tissu Réutilisable"
                                    data-description="Pratique et écologique pour vos courses"
                                    data-price="250 MAD"
                                    data-image="https://i0.wp.com/filotablo.fr/wp-content/uploads/2020/08/IMG_20200827_180025.jpg?fit=959%2C1080&ssl=1">
                                <i class="fas fa-eye"></i> Voir
                            </button>
                        </td>
                    </tr>

                    <!-- Produit 17 -->
                    <tr>
                        <td>
                            <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?q=80&w=1080&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" 
                                 alt="Huile de Rose" 
                                 style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                        </td>
                        <td>Huile de Rose</td>
                        <td>Nourrit et adoucit la peau</td>
                        <td><span class="badge bg-success">160 MAD</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary view-product" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#productModal"
                                    data-name="Huile de Rose"
                                    data-description="Nourrit et adoucit la peau"
                                    data-price="160 MAD"
                                    data-image="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?q=80&w=1080&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd">
                                <i class="fas fa-eye"></i> Voir
                            </button>
                        </td>
                    </tr>

                    <!-- Produit 18 -->
                    <tr>
                        <td>
                            <img src="https://www.indexsante.ca/chroniques/images/soins-des-cheveux-produits-naturels.jpg" 
                                 alt="Soin Capillaire Nourrissant" 
                                 style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                        </td>
                        <td>Soin Capillaire Nourrissant</td>
                        <td>Fortifie et réduit les pointes sèches</td>
                        <td><span class="badge bg-success">145 MAD</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary view-product" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#productModal"
                                    data-name="Soin Capillaire Nourrissant"
                                    data-description="Fortifie et réduit les pointes sèches"
                                    data-price="145 MAD"
                                    data-image="https://www.indexsante.ca/chroniques/images/soins-des-cheveux-produits-naturels.jpg">
                                <i class="fas fa-eye"></i> Voir
                            </button>
                        </td>
                    </tr>

                    <!-- Produit 19 -->
                    <tr>
                        <td>
                            <img src="https://tse4.mm.bing.net/th/id/OIP._KhfRZcpg2PGeOV_k-CyXQHaHa?rs=1&pid=ImgDetMain&o=7&rm=3" 
                                 alt="Rouge à Lèvres Mat" 
                                 style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                        </td>
                        <td>Rouge à Lèvres Mat</td>
                        <td>Couleurs riches et longue tenue</td>
                        <td><span class="badge bg-success">95 MAD</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary view-product" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#productModal"
                                    data-name="Rouge à Lèvres Mat"
                                    data-description="Couleurs riches et longue tenue"
                                    data-price="95 MAD"
                                    data-image="https://tse4.mm.bing.net/th/id/OIP._KhfRZcpg2PGeOV_k-CyXQHaHa?rs=1&pid=ImgDetMain&o=7&rm=3">
                                <i class="fas fa-eye"></i> Voir
                            </button>
                        </td>
                    </tr>

                    <!-- Produit 20 -->
                    <tr>
                        <td>
                            <img src="https://tse1.mm.bing.net/th/id/OIP.mTUFTh0UsfkRXj0wQEujBwHaHa?rs=1&pid=ImgDetMain&o=7&rm=3" 
                                 alt="Lot de Lingettes Douces" 
                                 style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                        </td>
                        <td>Lot de Lingettes Douces</td>
                        <td>Idéal pour le démaquillage et le nettoyage doux</td>
                        <td><span class="badge bg-success">55 MAD</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary view-product" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#productModal"
                                    data-name="Lot de Lingettes Douces"
                                    data-description="Idéal pour le démaquillage et le nettoyage doux"
                                    data-price="55 MAD"
                                    data-image="https://tse1.mm.bing.net/th/id/OIP.mTUFTh0UsfkRXj0wQEujBwHaHa?rs=1&pid=ImgDetMain&o=7&rm=3">
                                <i class="fas fa-eye"></i> Voir
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            <nav aria-label="Page navigation">
                <ul class="pagination" id="pagination">
                    <!-- La pagination sera générée par JavaScript -->
                </ul>
            </nav>
        </div>

        <!-- Message quand aucun produit n'est trouvé -->
        <div id="noProductsMessage" class="text-center py-5" style="display: none;">
            <i class="fas fa-search fa-3x text-muted mb-3"></i>
            <h4 class="text-muted">Aucun produit trouvé</h4>
            <p class="text-muted">Essayez avec d'autres termes de recherche</p>
        </div>
    </div>
</div>

<!-- Modal pour voir les détails du produit -->
<div class="modal fade" id="productModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalProductTitle"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="" alt="" id="modalProductImage" class="img-fluid rounded">
                    </div>
                    <div class="col-md-6">
                        <p id="modalProductDescription" class="lead"></p>
                        <div class="d-flex align-items-center mb-3">
                            <h4 id="modalProductPrice" class="text-success mb-0 me-3"></h4>
                            <span class="badge bg-success fs-6">En stock</span>
                        </div>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-success btn-lg">
                                <i class="fas fa-shopping-cart"></i> Acheter maintenant
                            </a>
                            <button class="btn btn-outline-success" data-bs-dismiss="modal">
                                <i class="fas fa-arrow-left"></i> Retour aux produits
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    .table-hover tbody tr:hover {
        background-color: rgba(40, 167, 69, 0.1);
        cursor: pointer;
    }
    .table th {
        background-color: #28a745;
        color: white;
        font-weight: 600;
    }
    .badge {
        font-size: 0.9em;
        padding: 0.5em 0.8em;
    }
    .btn-sm {
        padding: 0.25rem 0.5rem;
    }
    .input-group-text {
        border-right: none;
    }
    #searchInput {
        border-left: none;
    }
    .page-item.active .page-link {
        background-color: #28a745;
        border-color: #28a745;
    }
    .page-link {
        color: #28a745;
    }
    .page-link:hover {
        color: #218838;
        background-color: #e9ecef;
    }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Variables pour la pagination
    let currentPage = 1;
    const itemsPerPage = 5;
    let allProducts = [];
    let filteredProducts = [];
    
    // Récupérer tous les produits du tableau HTML
    function getAllProductsFromTable() {
        const products = [];
        const rows = document.querySelectorAll('#productTableBody tr');
        
        rows.forEach(row => {
            const name = row.querySelector('td:nth-child(2)').textContent;
            const description = row.querySelector('td:nth-child(3)').textContent;
            const price = row.querySelector('.badge').textContent;
            const image = row.querySelector('img').src;
            
            products.push({
                name: name,
                description: description,
                price: price,
                image: image,
                element: row
            });
        });
        
        return products;
    }
    
    // Initialiser les produits
    function initProducts() {
        allProducts = getAllProductsFromTable();
        filteredProducts = [...allProducts];
        setupPagination();
        updateSearchCount();
    }
    
    // Configuration de la recherche
    function setupSearch() {
        const searchInput = document.getElementById('searchInput');
        const clearSearchBtn = document.getElementById('clearSearch');
        
        if (searchInput) {
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase().trim();
                filterProducts(searchTerm);
                currentPage = 1;
                showProductsForCurrentPage();
                setupPagination();
                updateSearchCount();
            });
        }
        
        if (clearSearchBtn) {
            clearSearchBtn.addEventListener('click', function() {
                if (searchInput) {
                    searchInput.value = '';
                    filterProducts('');
                    currentPage = 1;
                    showProductsForCurrentPage();
                    setupPagination();
                    updateSearchCount();
                    searchInput.focus();
                }
            });
        }
    }
    
    // Filtrer les produits
    function filterProducts(searchTerm) {
        if (!searchTerm) {
            filteredProducts = [...allProducts];
            return;
        }
        
        filteredProducts = allProducts.filter(product => {
            return product.name.toLowerCase().includes(searchTerm) || 
                   product.description.toLowerCase().includes(searchTerm);
        });
    }
    
    // Afficher les produits pour la page courante
    function showProductsForCurrentPage() {
        const tableBody = document.getElementById('productTableBody');
        const noProductsMessage = document.getElementById('noProductsMessage');
        
        if (!tableBody) return;
        
        // Cacher tous les produits d'abord
        allProducts.forEach(product => {
            product.element.style.display = 'none';
        });
        
        // Vérifier s'il y a des produits filtrés
        if (filteredProducts.length === 0) {
            if (noProductsMessage) {
                noProductsMessage.style.display = 'block';
            }
            return;
        }
        
        if (noProductsMessage) {
            noProductsMessage.style.display = 'none';
        }
        
        // Calculer les produits à afficher
        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;
        const productsToShow = filteredProducts.slice(startIndex, endIndex);
        
        // Afficher seulement les produits de la page courante
        productsToShow.forEach(product => {
            product.element.style.display = '';
        });
    }
    
    // Configurer la pagination
    function setupPagination() {
        const pagination = document.getElementById('pagination');
        if (!pagination) return;
        
        const totalPages = Math.ceil(filteredProducts.length / itemsPerPage);
        
        // Si une seule page ou moins, ne pas afficher la pagination
        if (totalPages <= 1) {
            pagination.innerHTML = '';
            return;
        }
        
        let paginationHTML = '';
        
        // Bouton Précédent
        if (currentPage > 1) {
            paginationHTML += `
                <li class="page-item">
                    <a class="page-link" href="#" data-page="${currentPage - 1}">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                </li>
            `;
        } else {
            paginationHTML += `
                <li class="page-item disabled">
                    <span class="page-link">
                        <i class="fas fa-chevron-left"></i>
                    </span>
                </li>
            `;
        }
        
        // Pages
        for (let i = 1; i <= totalPages; i++) {
            if (i === currentPage) {
                paginationHTML += `
                    <li class="page-item active">
                        <span class="page-link">${i}</span>
                    </li>
                `;
            } else {
                paginationHTML += `
                    <li class="page-item">
                        <a class="page-link" href="#" data-page="${i}">${i}</a>
                    </li>
                `;
            }
        }
        
        // Bouton Suivant
        if (currentPage < totalPages) {
            paginationHTML += `
                <li class="page-item">
                    <a class="page-link" href="#" data-page="${currentPage + 1}">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </li>
            `;
        } else {
            paginationHTML += `
                <li class="page-item disabled">
                    <span class="page-link">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </li>
            `;
        }
        
        pagination.innerHTML = paginationHTML;
        
        // Attacher les événements de pagination
        pagination.querySelectorAll('.page-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const page = this.getAttribute('data-page');
                if (page) {
                    changePage(parseInt(page));
                }
            });
        });
    }
    
    // Changer de page
    function changePage(page) {
        if (page < 1 || page > Math.ceil(filteredProducts.length / itemsPerPage)) {
            return;
        }
        
        currentPage = page;
        showProductsForCurrentPage();
        setupPagination();
    }
    
    // Mettre à jour le compteur de recherche
    function updateSearchCount() {
        const searchCount = document.getElementById('searchCount');
        if (searchCount) {
            if (filteredProducts.length === allProducts.length) {
                searchCount.textContent = `Total: ${allProducts.length} produits`;
            } else {
                searchCount.textContent = `${filteredProducts.length} produit(s) trouvé(s) sur ${allProducts.length}`;
            }
        }
    }
    
    // Configuration des événements pour les boutons "Voir"
    function setupViewButtons() {
        document.querySelectorAll('.view-product').forEach(button => {
            button.addEventListener('click', function() {
                const name = this.getAttribute('data-name');
                const description = this.getAttribute('data-description');
                const price = this.getAttribute('data-price');
                const image = this.getAttribute('data-image');
                
                document.getElementById('modalProductTitle').textContent = name;
                document.getElementById('modalProductDescription').textContent = description;
                document.getElementById('modalProductPrice').textContent = price;
                document.getElementById('modalProductImage').src = image;
            });
        });
        
        // Permettre de cliquer sur toute la ligne
        document.querySelectorAll('tbody tr').forEach(row => {
            row.addEventListener('click', function(e) {
                if (!e.target.closest('.view-product')) {
                    const viewBtn = this.querySelector('.view-product');
                    if (viewBtn) {
                        viewBtn.click();
                    }
                }
            });
        });
    }
    
    // Initialiser
    initProducts();
    setupSearch();
    setupViewButtons();
    showProductsForCurrentPage();
});
</script>
@endpush

@endsection