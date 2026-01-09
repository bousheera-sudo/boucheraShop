@extends('Master_page')

@section('title', 'Contact')

@section('content')
<div class="contact-section">
    <div class="container">
        <h1 class="text-center mb-4">Contactez-nous</h1>
        <p class="text-center lead">N’hésitez pas à nous contacter pour toute question ou suggestion. Nous sommes là pour vous aider.</p>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3>Coordonnées</h3>
                <p><strong>Email :</strong> contact@ecomv1.com</p>
                <p><strong>Téléphone :</strong> +212 6 12 34 56 78</p>
                <p><strong>Adresse :</strong> 123 Rue de la Beauté, Casablanca, Maroc</p>

                <h3 class="mt-4">Formulaire de Contact</h3>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="name" placeholder="Votre nom">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Votre email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Votre message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-custom">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection