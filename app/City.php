<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function state()
    {
        return $this->belongsTo('App\Subdivision');
    }
    public function addresses()
    {
        return $this->belongsToMany('App\Address');
    }
}
