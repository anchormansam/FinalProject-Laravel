<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mybag extends Model
{
    protected $fillable = [
        'user_id', 'name',
    ];

    public function mybagofdiscs()
    {

        return $this->hasOne('App\Mybagofdiscs');
    }




}
