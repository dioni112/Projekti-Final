<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}