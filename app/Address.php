<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['city_id', 'latitude', 'longitude','created_at', 'updated_at'];

    public function city()
    {
        return $this->hasOne('App\City','id','city_id');
    }

    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }
}
