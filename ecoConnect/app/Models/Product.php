<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['titre', 'prix', 'description', 'image', 'likes', 'validated'];    

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function collaborateur()
    {
        return $this->belongsTo(Collaborateur::class);
    }
}
