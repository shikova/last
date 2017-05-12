<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subdivision extends Model
{
    public function cities()
    {
        return $this->belongsToMany('App\City');
    }
}
