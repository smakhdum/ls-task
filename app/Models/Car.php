<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $fillable = ['name'];
    public function mechanic()
    {
        return $this->belongsTo('App\Models\Mechanic');
    }
}
