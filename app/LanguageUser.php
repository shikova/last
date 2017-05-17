<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LanguageUser extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function Language()
    {
        return $this->belongsTo(Language::class);
    }
}
