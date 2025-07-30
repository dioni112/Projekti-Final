<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password', 'role'];

    protected $hidden = ['password', 'remember_token'];

    // A user can post many cars
    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    // A user can make many orders (buy many cars)
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
