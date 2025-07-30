<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'car_id', 'purchased_at'];

    // Order belongs to a user (buyer)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Order belongs to a car
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
