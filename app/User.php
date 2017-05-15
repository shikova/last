<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'username', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'role_id', 'remember_token',
    ];

    public function address()
    {
        return $this->hasOne('\App\Address');
    }

    public function role()
    {
        return $this->belongsTo('\App\Role');
    }

    public function isAdmin()
    {
        if ($this->role_id == 1)
            return 'yes';

        return 'no';
    }

    public function isPro()
    {
        if ($this->role_id ==3)
            return 'yes';

        return 'no';
    }

    public function isNormal()
    {
        if ($this->role_id == 2)
            return 'yes';

        return 'no';
    }

}
