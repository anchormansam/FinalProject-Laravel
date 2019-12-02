<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

    public function plastic()
    {
        return $this->hasMany('App\Plastic');

    }
    public function disc()
    {
        return $this->hasOne('App\Disc');
    }
    
}