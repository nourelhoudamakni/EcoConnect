<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\CategorieActeEnum;

class ActeVolontaire extends Model
{
    use HasFactory;
    protected $fillable = ['categorie', 'titre', 'description', 'date', 'heure', 'images', 'lieu'];
    protected $casts = [

        'categorie' => CategorieActeEnum::class

    ];
    protected $appends = ['date_formated'];
//---
public function getdateFormatedAttribute()
{
    return date("d-m-Y", strtotime($this->date));
}
}
