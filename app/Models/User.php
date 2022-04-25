<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'categories' => 'json'
    ];

    //  Relationships

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function buyerOffers()
    {
        return $this->hasMany(Offer::class, 'buyer_id');
    }

    public function sellerOffers()
    {
        return $this->hasMany(Offer::class, 'seller_id');
    }

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class, 'taker_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'user_category');
    }

    // Attributes

    public function getEvaluationScoreAttribute()
    {
        return round($this->evaluations->pluck('value')->average(), 1);
    }

    // Scopes

    public function scopeWithAllRelations($query)
    {
        return $query
            ->with(['evaluations'])
            ->withCount(['evaluations']);
    }
}
