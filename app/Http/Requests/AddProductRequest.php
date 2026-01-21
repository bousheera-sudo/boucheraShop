<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
{
    /**
     * Détermine si l’utilisateur est autorisé à faire cette requête.
     */
    public function authorize(): bool
    {
        // Ici, on autorise tout le monde.
        return true;
    }

    /**
     * Règles de validation
     */
    public function rules(): array
    {
        return [
            'nom'       => 'required|min:5',
            'prix'      => 'required',
            'categorie' => 'required|min:5',
        ];
    }

    /**
     * Messages d’erreur personnalisés
     */
    public function messages()
    {
        return [
            'nom.required'       => 'name is required',
            'nom.min'            => 'too short enter more',
            'prix.required'      => 'price is required',
            'categorie.required' => 'category is required',
            'categorie.min'      => 'too short enter more',
        ];
    }
}