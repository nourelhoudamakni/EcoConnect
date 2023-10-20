<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\EtatProjetEnum;


class Projet_Environnemental extends Model
{
    use HasFactory;
    protected $fillable = [ 'titre', 'description', 'objectif','ressources', 'etat','image'];
    protected $casts = [
        'etat' => EtatProjetEnum::class
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function sponsors()
    {
    return $this->belongsToMany(Sponsor::class);
    }
}
