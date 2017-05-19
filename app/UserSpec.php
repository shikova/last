<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSpec extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function Speciality()
    {
        return $this->belongsTo(Speciality::class);
    }
}
