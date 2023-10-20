<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\CategorieEducationEnum;

class Education extends Model
{
    use HasFactory;
    use \Conner\Tagging\Taggable;
    protected $fillable = ['categorie', 'titre', 'description', 'image'];
    protected $casts = [

        'categorie' => CategorieEducationEnum::class

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function feedBacks(){
        return $this->hasMany(FeedBack::class);
    }
}
