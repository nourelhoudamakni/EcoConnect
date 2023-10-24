<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    use HasFactory;
    protected $fillable = [ 'description','note'];
    public function education()
    {
        return $this->belongsTo(Education::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
