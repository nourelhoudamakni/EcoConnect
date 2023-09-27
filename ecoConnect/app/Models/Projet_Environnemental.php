<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet_Environnemental extends Model
{
    use HasFactory;
    protected $fillable = [ 'titre', 'description', 'objectif','ressources', 'etat'];
    protected $casts = [

        'etat' => EtatProjetEnum::class

    ];
}
