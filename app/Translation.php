<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Song;

class Translation extends Model
{
    public function songs()
    {
    	return $this->belongsTo('App\Song');
    }
}
