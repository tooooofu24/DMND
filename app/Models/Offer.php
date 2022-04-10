<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $appends = ['image_urls'];

    //  Relationships

    public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }

    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(OfferImage::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    // Attributes

    public function getImageUrlsAttribute()
    {
        return $this->images->pluck('url');
    }

    // Scopes
    public function scopeWithAllRelations($query)
    {
        return $query
            ->with(['buyer', 'seller', 'category.baseCategory', 'images'])
            ->withCount(['favorites']);
    }
}
