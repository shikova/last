<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['user_id', 'address_id', 'phone','fax', 'facebook','twitter','instagram','about'];

    public function user()
    {
        return $this->belongsTo('\App\User');
    }
    public function address()
    {
        return $this->hasOne('\App\Address','id');
    }
}
