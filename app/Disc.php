<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disc extends Model
{
    public function plastic()
    {
        return $this->hasMany('App\Plastic');
    }
    public function brand()
    {
        return $this->hasOne('App\Brand');
    }

}