<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function zip_code()
    {
        return $this->belongsTo('App\ZipCode');
    }
}
