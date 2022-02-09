<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public $fillable = ['owner_name', 'car_id'];
    public function car()
    {
        return $this->belongsTo('App\Models\Car');
    }
}
