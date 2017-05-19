<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function reviewer()
    {
        return $this->belongsToMany('\App\User','reviewer_id');

    }
    public function reviewed()
    {

        return $this->belongsToMany('\App\User','reviewed_id');
    }
}
