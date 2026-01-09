@extends('Master_page')

@section('title', 'BOUCHERASHOP - À propos')

@section('content')
<div class="container py-5">
    <h1 class="section-title mb-5">À propos de BOUCHERASHOP</h1>
    
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h2 class="mb-4">Notre Histoire</h2>
            <p>BOUCHERASHOP est né de la passion pour la beauté naturelle et le bien-être. Fondé en 2023, notre objectif est de proposer des produits de beauté 100% naturels, respectueux de votre peau et de l'environnement.</p>
            <p>Nous croyons en une beauté consciente, qui prend soin de vous sans compromettre la planète.</p>
        </div>
        <div class="col-md-6 text-center">
            <i class="fas fa-seedling fa-7x" style="color: var(--primary-green);"></i>
        </div>
    </div>
    
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="mb-4">Nos Valeurs</h2>
            <div class="row g-4">
                <div class="col-md-3 text-center">
                    <div class="p-4 rounded" style="background-color: var(--beige);">
                        <i class="fas fa-leaf fa-2x mb-3" style="color: var(--primary-green);"></i>
                        <h5>Naturel</h5>
                        <p>Ingrédients purs et biologiques</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="p-4 rounded" style="background-color: var(--beige);">
                        <i class="fas fa-recycle fa-2x mb-3" style="color: var(--primary-green);"></i>
                        <h5>Écologique</h5>
                        <p>Emballages recyclables</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="p-4 rounded" style="background-color: var(--beige);">
                        <i class="fas fa-heart fa-2x mb-3" style="color: var(--primary-green);"></i>
                        <h5>Éthique</h5>
                        <p>Commerce équitable</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="p-4 rounded" style="background-color: var(--beige);">
                        <i class="fas fa-award fa-2x mb-3" style="color: var(--primary-green);"></i>
                        <h5>Qualité</h5>
                        <p>Produits testés et certifiés</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="text-center mt-5">
        <a href="{{ route('contact') }}" class="btn btn-add-to-cart px-5">
            <i class="fas fa-envelope me-2"></i>Nous contacter
        </a>
    </div>
</div>
@endsection