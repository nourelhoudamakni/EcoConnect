<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;
    protected $fillable = [ 'nom', 'description', 'dateDebut','dateFin'];

    public function ProjetEnvironnementals()
    {
    return $this->belongsToMany(Projet_Environnemental::class);
    }
}
