<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// app/Models/Produit.php
class Produit extends Model
{
    protected $fillable = [
        'nom',
        'description',
        'prix',
        'image',
        'categorie'
    ];
}



