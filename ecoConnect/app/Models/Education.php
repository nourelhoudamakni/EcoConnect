<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable = ['categorie', 'titre', 'Description', 'date_de_creation', 'image', 'video', 'motCles', 'validation'];
}
