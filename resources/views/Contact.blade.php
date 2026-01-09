@extends('Master_page')

@section('title', 'BOUCHERASHOP - Contact')

@section('content')
<div class="container py-5">
    <h1 class="section-title mb-5">Contactez-nous</h1>
    
    <div class="row">
        <div class="col-md-6 mb-4">
            <h3 class="mb-4">Informations de contact</h3>
            <div class="mb-3">
                <i class="fas fa-map-marker-alt me-2" style="color: var(--primary-green);"></i>
                <strong>Adresse :</strong> 123 Rue de la Beauté Naturelle, 75000 Paris
            </div>
            <div class="mb-3">
                <i class="fas fa-phone me-2" style="color: var(--primary-green);"></i>
                <strong>Téléphone :</strong> +33 1 23 45 67 89
            </div>
            <div class="mb-3">
                <i class="fas fa-envelope me-2" style="color: var(--primary-green);"></i>
                <strong>Email :</strong> contact@boucherashop.com
            </div>
            <div class="mb-3">
                <i class="fas fa-clock me-2" style="color: var(--primary-green);"></i>
                <strong>Horaires :</strong> Lundi-Vendredi 9h-18h
            </div>
            
            <div class="mt-5">
                <h4 class="mb-3">Suivez-nous</h4>
                <div>
                    <a href="#" class="btn btn-outline-primary me-2">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-outline-info me-2">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="btn btn-outline-success">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <h3 class="mb-4">Envoyez-nous un message</h3>
            <form id="contact-form">
                <div class="mb-3">
                    <label for="name" class="form-label">Nom complet *</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email *</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Sujet</label>
                    <input type="text" class="form-control" id="subject">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message *</label>
                    <textarea class="form-control" id="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-add-to-cart w-100">
                    <i class="fas fa-paper-plane me-2"></i>Envoyer le message
                </button>
            </form>
        </div>
    </div>
</div>

@section('scripts')
<script>
    document.getElementById('contact-form').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Merci pour votre message ! Nous vous répondrons dans les plus brefs délais.');
        this.reset();
    });
</script>
@endsection
@endsection