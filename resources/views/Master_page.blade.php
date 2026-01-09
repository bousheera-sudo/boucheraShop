<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BOUCHERASHOP - Beauté Naturelle')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-green: #2E8B57;
            --light-green: #98FB98;
            --beige: #F5F5DC;
            --white: #FFFFFF;
            --dark: #333333;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--white);
            color: var(--dark);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .navbar {
            background-color: var(--primary-green) !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.8rem;
            color: var(--white) !important;
        }
        .nav-link {
            color: var(--white) !important;
            font-weight: 500;
            padding: 10px 15px !important;
        }
        .nav-link:hover, .nav-link.active {
            color: var(--light-green) !important;
            background-color: rgba(255,255,255,0.1);
            border-radius: 5px;
        }
        main {
            flex: 1;
        }
        .product-card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            transition: all 0.3s ease;
            background-color: var(--white);
            height: 100%;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            border-color: var(--primary-green);
        }
        .product-price {
            color: var(--primary-green);
            font-weight: bold;
            font-size: 1.2rem;
        }
        .btn-add-to-cart {
            background-color: var(--primary-green);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: all 0.3s;
            width: 100%;
        }
        .btn-add-to-cart:hover {
            background-color: #26734d;
            transform: scale(1.05);
        }
        .hero-section {
            background: linear-gradient(135deg, var(--light-green) 0%, var(--primary-green) 100%);
            color: white;
            padding: 5rem 0;
            margin-bottom: 3rem;
            text-align: center;
        }
        .section-title {
            color: var(--primary-green);
            border-bottom: 3px solid var(--light-green);
            padding-bottom: 10px;
            display: inline-block;
            margin-bottom: 30px;
        }
    </style>
    @yield('styles')
</head>
<body>
    <!-- Inclusion du Menu -->
    @include('Menu')
    
    <!-- Contenu Principal -->
    <main>
        @yield('content')
    </main>
    
    <!-- Inclusion du Footer -->
    @include('Footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Fonction pour ajouter au panier
        function addToCart(productId, productName, price) {
            alert(`Produit "${productName}" (${price} DH) ajouté au panier !`);
            // Logique d'ajout au panier (session, localStorage, etc.)
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.push({id: productId, name: productName, price: price});
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount();
        }
        
        // Mettre à jour le compteur du panier
        function updateCartCount() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let cartCount = document.getElementById('cart-count');
            if(cartCount) {
                cartCount.textContent = cart.length;
            }
        }
        
        // Initialiser au chargement
        document.addEventListener('DOMContentLoaded', function() {
            updateCartCount();
        });
    </script>
    @yield('scripts')
</body>
</html>