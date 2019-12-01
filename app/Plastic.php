<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plastic extends Model
{

    public function disc()
    {
        return $this->belongsTo('App\Disc');
    }
    public function brand()
    {
        return $this->hasOne('App\Brand');
    }
}
