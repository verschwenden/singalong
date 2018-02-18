<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Translation;

class Song extends Model
{
    public function translations()
    {
    	return $this->hasMany('App\Translation');
    }

    public function artists()
    {
    	return $this->belongsToMany('App\Artist');
    }
}
