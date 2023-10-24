<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborateur extends Model
{
    use HasFactory;
    protected $fillable = ['email', 'adresse', 'nom', 'siteWeb'];

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function users()
{
    return $this->belongsToMany(User::class);
}

}
