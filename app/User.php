<?php

namespace App;
use Laravel\Passport\HasApiTokens;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'role_id', 'remember_token',
    ];

    public function contact()
    {
        return $this->hasOne('\App\Contact');
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

    public function isDoc()
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
    public function user()
    {
        return $this->belongsToMany(LanguageUser::class);
    }
    public function reviews()
    {
        return $this->hasMany('\App\Review');
    }
    public function specialities()
    {
        return $this->belongsToMany('App\UserSpec');
    }
}
