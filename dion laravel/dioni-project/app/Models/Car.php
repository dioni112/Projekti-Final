<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'title', 'description', 'price', 'brand', 'model', 
        'year', 'mileage', 'fuel_type', 'transmission', 
        'location', 'is_sold', 'user_id'
    ];

    // A car belongs to one user (seller)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // A car can have many images
    public function images()
    {
        return $this->hasMany(CarImage::class);
    }

    // A car can have many orders (or one order, depending on logic)
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
