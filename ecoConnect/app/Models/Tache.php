<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'description', 'date_debut', 'date_fin'];

    public function projetEnvironnemental()
    {
        return $this->belongsTo(ProjetEnvironnemental::class);
    }
}