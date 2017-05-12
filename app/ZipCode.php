<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ZipCode extends Model
{
    public function addresses()
    {
        return $this->belongsToMany('App\Address');
    }
}
