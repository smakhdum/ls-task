<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $fillable = ['model','mechanic_id'];
    public function mechanic()
    {
        return $this->belongsTo('App\Models\Mechanic');
    }
}
