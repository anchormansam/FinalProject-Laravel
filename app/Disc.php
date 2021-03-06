<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disc extends Model
{
  
    protected $fillable = [
        'brand_id', 'plastic_id', 'name', 'speed', 'turn', 'fade','glide'
    ];

    public function plastic()
    {
        return $this->hasMany('App\Plastic');
    }
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

}