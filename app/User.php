<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    function IdentityProviders()
    {
        // IdentityProviderモデルと紐付ける 1対多の関係
        return $this->hasMany(IdentityProvider::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'token',
        'avatar',
        'facebook_id',
        'image',
        'image_path',
        'public_id',
        'name',
        'specialized',
        'company',
        'about',
        'twitter_url',
        'facebook_url',
        'instagram_url',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts(){
        return $this->hasMany('App\Post');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function experience(){
        return $this->hasMany('App\Experience');
    }
    public function education(){
        return $this->hasMany('App\Education');
    }
    public function publication(){
        return $this->hasMany('App\Publication');
    }
    public function socialevent(){
        return $this->hasMany('App\Socialevent');
    }

}
