<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use App\Models\ActeVolontaire;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstName',
        'lastName',
        'username',
        'phone',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }
    public function posts() {
        return $this->hasMany(Posts::class);
    }

    public function commentsUsers() {
        return $this->hasMany(Comment::class);
    }

    public function projet__environnementals()
    {
        return $this->hasMany(Projet_Environnemental::class);
    }
    public function actes()
    {
        return $this->hasMany(ActeVolontaire::class);
    }
    public function actevolontaires()
    {
        return $this->belongsToMany(ActeVolontaire::class,'acte_volontaire_user');
    }
    public function educations(){
        return $this->hasMany(Education::class);
    }
    public function feedbackusers(){
        return $this->hasMany(FeedBack::class);
    }
}
