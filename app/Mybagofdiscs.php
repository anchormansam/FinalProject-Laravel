<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mybagofdiscs extends Model
{
    protected $fillable = [
        'user_id', 'discs_id', 'mybag_id',
    ];

    public function User() 
    {
        
        return $this->belongsTo('App\User');

    } 

    public function Mybag() 
    {
        
        return $this->belongsTo('App\Mybag');

    } 

    public function discs() 
    {
        
        return $this->belongsTo('App\Disc');

    } 
        
}
