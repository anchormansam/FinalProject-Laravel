<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mybagofdiscs extends Model
{
    public function User() 
    {
        
        return $this->belongsTo('App\User');

    } 

    public function Mybag() 
    {
        
        return $this->hasMany('App\Mybag');

    } 


        
}
