<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSpec extends Model
{
    public function user()
    {
        return $this->belongsTo(Lang::class);

    }
}
