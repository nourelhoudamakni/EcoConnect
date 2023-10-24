<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\StatusEnum;
use App\Enums\TypeDonEnum;

class Demande_De_Don extends Model
{
    use HasFactory;
    protected $fillable = ['titre', 'typeDon', 'description', 'dateCreation', 'dateFin', 'status'];
    protected $casts = [

        'typeDon' => TypeDonEnum::class,
        'status' => StatusEnum::class

    ];
    protected $appends = ['date_formated'];
//---
public function getdateFormatedAttribute()
{
    return date("d-m-Y", strtotime($this->date));
}
public function acte()
    {
        return $this->belongsTo(ActeVolontaire::class);
    }
}

