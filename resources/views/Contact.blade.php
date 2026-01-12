@extends('Master_page')

@section('content')
<!-- HERO -->
<div class="hero-section" style="min-height: 250px; padding: 60px 0;">
    <div class="container">
        <h1 class="text-center fw-bold">Contactez-nous</h1>
        <p class="text-center fs-5" style="color: rgba(255,255,255,0.95);">Nous sommes à votre écoute pour vos questions</p>
    </div>
</div>

<div class="container my-5">
    <div class="row g-4">
        <!-- Info de contact -->
        <div class="col-md-4">
            <div class="card border-0 h-100 text-center">
                <div class="card-body">
                    <div style="font-size: 3rem; margin-bottom: 1rem; color: var(--primary-color);">📧</div>
                    <h5 class="card-title">Email</h5>
                    <p class="card-text"><a href="mailto:contact@beautenaturelle.com" style="color: var(--primary-color); text-decoration: none;">contact@beautenaturelle.com</a></p>
                </div>
            </div>
        </div>

        <!-- Téléphone -->
        <div class="col-md-4">
            <div class="card border-0 h-100 text-center">
                <div class="card-body">
                    <div style="font-size: 3rem; margin-bottom: 1rem; color: var(--primary-color);">📱</div>
                    <h5 class="card-title">Téléphone</h5>
                    <p class="card-text"><a href="tel:+212644890219" style="color: var(--primary-color); text-decoration: none;">+212 6 44 89 02 19</a></p>
                </div>
            </div>
        </div>

        <!-- Adresse -->
        <div class="col-md-4">
            <div class="card border-0 h-100 text-center">
                <div class="card-body">
                    <div style="font-size: 3rem; margin-bottom: 1rem; color: var(--primary-color);">📍</div>
                    <h5 class="card-title">Adresse</h5>
                    <p class="card-text">Marrakech, Maroc</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulaire de contact -->
    <div class="row mt-5">
        <div class="col-md-8 mx-auto">
            <h3 class="text-center mb-4 fw-bold">Envoyez-nous un message</h3>
            <form method="POST" action="#">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label fw-500">Nom complet</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label fw-500">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label fw-500">Sujet</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label fw-500">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-lg w-100 fw-bold">Envoyer le message</button>
            </form>
        </div>
    </div>
</div>
@endsection
