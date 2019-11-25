<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function disc()
    {
        return $this->belongsTo('App\Disc');
    }
}
