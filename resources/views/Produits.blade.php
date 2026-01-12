@extends('Master_page')

@section('content')
<div class="bg-beige py-5">
  <div class="container mt-5">
    <h2 class="text-success text-center mb-4">Nos Produits</h2>

    <div class="row g-4">

        <!-- Produit 1 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="https://tse3.mm.bing.net/th/id/OIP.YZeZ8xCz2gAAzq6Q22I4BgHaHa?rs=1&pid=ImgDetMain&o=7&rm=3" class="card-img-top" alt="Ensemble Découverte">
                 
                <div class="card-body text-center">
                    <h5 class="card-title">Crème Hydratante Bio</h5>
                    <p class="card-text">Hydrate et nourrit la peau.</p>
                    <span class="badge bg-success">120 MAD</span>
                </div>
            </div>
        </div>

        <!-- Produit 2 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
              <img src="https://th.bing.com/th/id/OIP._e3NxLEQ7DVZCuQnq9GHkgHaHa?w=208&h=208&c=7&r=0&o=7&pid=1.7&rm=3" class="card-img-top" alt="Ensemble Découverte">
                    
                <div class="card-body text-center">
                    <h5 class="card-title">Huile d’Argan</h5>
                    <p class="card-text">Soin naturel visage & cheveux.</p>
                    <span class="badge bg-success">150 MAD</span>
                </div>
            </div>
        </div>

       
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
              <img src="https://www.le-colibri.net/medias/boutique/1938/agrumes.jpg" class="card-img-top" alt="Ensemble Découverte">
                    
                <div class="card-body text-center">
                    <h5 class="card-title">Savon Naturel</h5>
                    <p class="card-text">Nettoyage doux et bio.</p>
                    <span class="badge bg-success">60 MAD</span>
                </div>
            </div>
        </div>                                    

    <!-- Nouveaux produits -->

    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="https://www.jeunejolie.fr/wp-content/uploads/comment-choisir-le-bon-masque-purifiant-visage-3F-1-1024x683.jpg" class="card-img-top" alt="Masque Purifiant">
            <div class="card-body text-center">
                <h5 class="card-title">Masque Purifiant</h5>
                <p class="card-text">Purifie et rééquilibre la peau.</p>
                <span class="badge bg-success">80 MAD</span>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="https://www.belovesnature.com/wp-content/uploads/2018/01/gommage-doux-visage-soin-du-visage.jpg" class="card-img-top" alt="Gommage Doux">
            <div class="card-body text-center">
                <h5 class="card-title">Gommage Doux</h5>
                <p class="card-text">Exfolie sans agresser.</p>
                <span class="badge bg-success">75 MAD</span>
            </div>
        </div>
    </div>

   

 

    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="https://www.beaute3d.com/7983-thickbox_default/academie-scientifique-de-beaute-serum-eclat-12-h.jpg" class="card-img-top" alt="Sérum Éclat">
            <div class="card-body text-center">
                <h5 class="card-title">Sérum Éclat</h5>
                <p class="card-text">Concentré en vitamine C pour un teint lumineux.</p>
                <span class="badge bg-success">180 MAD</span>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="https://www.huiles-baumes.fr/wp-content/uploads/2018/05/baume_r%C3%A9parateur.jpg" class="card-img-top" alt="Baume Réparateur">
            <div class="card-body text-center">
                <h5 class="card-title">Baume Réparateur</h5>
                <p class="card-text">Apaise et répare les zones sèches et abîmées.</p>
                <span class="badge bg-success">130 MAD</span>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="https://tse1.mm.bing.net/th/id/OIP.MvjtlBO3diSEQbSa_6VYyQHaKI?rs=1&pid=ImgDetMain&o=7&rm=3" class="card-img-top" alt="Ensemble Découverte">
            <div class="card-body text-center">
                <h5 class="card-title">Ensemble Découverte</h5>
                <p class="card-text">Coffret de miniatures pour tester nos essentiels.</p>
                <span class="badge bg-success">220 MAD</span>
            </div>
        </div>
    </div>

    <!-- Ajout : 4 produits externes supplémentaires -->

    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="https://www.foliecosmetic.com/20493-thickbox_default/evoluderm-lotion-tonique-purifiante-au-zinc-et-extrait-de-the-vert-250ml.jpg" class="card-img-top" alt="Lotion Tonique">
            <div class="card-body text-center">
                <h5 class="card-title">Lotion Tonique</h5>
                <p class="card-text">Tonifie et prépare la peau aux soins.</p>
                <span class="badge bg-success">85 MAD</span>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="https://www.ricaud.com/medias/api/airtable/catalog/product/22691/22691_2.png" class="card-img-top" alt="Crème de Nuit Régénérante">
            <div class="card-body text-center">
                <h5 class="card-title">Crème de Nuit Régénérante</h5>
                <p class="card-text">Répare et nourrit pendant la nuit.</p>
                <span class="badge bg-success">210 MAD</span>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="https://toutnaturellement.ca/wp-content/uploads/2023/03/Deo-zinc-3.jpg" class="card-img-top" alt="Déodorant Naturel">
            <div class="card-body text-center">
                <h5 class="card-title">Déodorant Naturel</h5>
                <p class="card-text">Protection douce et respectueuse de la peau.</p>
                <span class="badge bg-success">70 MAD</span>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="https://corpo.ideecadeauquebec.com/wp-content/uploads/2022/09/coffret-cadeaux-luxueux-2023-cadeaux-corporatifs-idee-cadeau-quebec.jpg" class="card-img-top" alt="Coffret Cadeau Deluxe">
            <div class="card-body text-center">
                <h5 class="card-title">Coffret Cadeau Deluxe</h5>
                <p class="card-text">Sélection premium pour offrir une routine complète.</p>
                <span class="badge bg-success">350 MAD</span>
            </div>
        </div>
    </div>
    <!-- Ajout : 2 produits externes -->

    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="https://media.vogue.fr/photos/5c2f5b7a46fe0827de4aee74/master/w_1600%2Cc_limit/advanced_night_repair_powerfoil_mask_lifestyle_shot_global_editorial_only_expiry_january_2017_jpg_6760_jpeg_9770.jpeg" class="card-img-top" alt="Masque Nuit Réparateur">
            <div class="card-body text-center">
                <h5 class="card-title">Masque Nuit Réparateur</h5>
                <p class="card-text">Restaure l'éclat et la souplesse pendant la nuit.</p>
                <span class="badge bg-success">140 MAD</span>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="https://cdn.shopify.com/s/files/1/0068/0932/1537/files/NS-SunSecure-SpraySPF50-FicheProduit.jpg?v=1715860952" class="card-img-top" alt="Spray Protecteur SPF">
            <div class="card-body text-center">
                <h5 class="card-title">Spray Protecteur SPF</h5>
                <p class="card-text">Protection légère et non grasse pour une utilisation quotidienne.</p>
                <span class="badge bg-success">95 MAD</span>
            </div>
        </div>
    </div>
     <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="https://myieva.com/wp-content/uploads/2022/09/BRUME_hydratation_intense-AWARD.jpg" class="card-img-top" alt="Brume Hydratante">
            <div class="card-body text-center">
                <h5 class="card-title">Brume Hydratante</h5>
                <p class="card-text">Rafraîchit et hydrate instantanément.</p>
                <span class="badge bg-success">95 MAD</span>
            </div>
        </div>
    </div>

    <!-- Nouveaux produits ajoutés -->

    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="https://i0.wp.com/filotablo.fr/wp-content/uploads/2020/08/IMG_20200827_180025.jpg?fit=959%2C1080&ssl=1" class="card-img-top" alt="Sac Tissu">
            <div class="card-body text-center">
                <h5 class="card-title">Sac Tissu Réutilisable</h5>
                <p class="card-text">Pratique et écologique pour vos courses.</p>
                <span class="badge bg-success">250 MAD</span>
            </div>
        </div>
    </div>

    

    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?q=80&w=1080&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" class="card-img-top" alt="Huile de Rose">
            <div class="card-body text-center">
                <h5 class="card-title">Huile de Rose</h5>
                <p class="card-text">Nourrit et adoucit la peau.</p>
                <span class="badge bg-success">160 MAD</span>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="https://www.indexsante.ca/chroniques/images/soins-des-cheveux-produits-naturels.jpg" class="card-img-top" alt="Soin Capillaire">
            <div class="card-body text-center">
                <h5 class="card-title">Soin Capillaire Nourrissant</h5>
                <p class="card-text">Fortifie et réduit les pointes sèches.</p>
                <span class="badge bg-success">145 MAD</span>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="https://tse4.mm.bing.net/th/id/OIP._KhfRZcpg2PGeOV_k-CyXQHaHa?rs=1&pid=ImgDetMain&o=7&rm=3" class="card-img-top" alt="Rouge à Lèvres">
            <div class="card-body text-center">
                <h5 class="card-title">Rouge à Lèvres Mat</h5>
                <p class="card-text">Couleurs riches et longue tenue.</p>
                <span class="badge bg-success">95 MAD</span>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="https://tse1.mm.bing.net/th/id/OIP.mTUFTh0UsfkRXj0wQEujBwHaHa?rs=1&pid=ImgDetMain&o=7&rm=3" class="card-img-top" alt="Lot de Lingettes">
            <div class="card-body text-center">
                <h5 class="card-title">Lot de Lingettes Douces</h5>
                <p class="card-text">Idéal pour le démaquillage et le nettoyage doux.</p>
                <span class="badge bg-success">55 MAD</span>
            </div>
        </div>
    </div>

    </div>
  </div>
</div>
@endsection
