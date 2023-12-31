<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{   

    use HasFactory;

    protected $fillable = ['titre', 'description', 'image','likes'];


    public function user() {
        return $this->belongsTo(User::class);
    }
 
    
    public function comments() {
        return $this->hasMany(Comment::class);
    }
   
    public function likess() {
        return $this->hasMany(Like::class);
    }
   


}

