<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{

    public function users()
    {
        return $this->hasMany('\App\User');
    }
    public function category()
    {
        return $this->belongsTo('\App\Category');
    }
    public function parentId()
    {
        return $this->belongsTo(self::class);
    }
}
