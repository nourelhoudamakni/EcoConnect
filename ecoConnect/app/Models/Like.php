<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $fillable = [
        "posts_id",
        "user_id",
    ];



    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function post() {
        return $this->belongsTo(Posts::class);
    }

}
