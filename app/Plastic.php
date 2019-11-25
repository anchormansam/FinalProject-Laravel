<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plastic extends Model
{
    public function disc()
    {
        return $this->belongsTo('App\Disc');
    }
}
