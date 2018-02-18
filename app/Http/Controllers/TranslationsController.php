<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

#include this
use Illuminate\Support\Facades\DB;
use App\Song;
use App\Translation;
use Collective\Html;
use Illuminate\Database\Eloquent\Model;

#Traits
use App\Traits\MyTrait;


class TranslationsController extends Controller
{
    public function all_songs()
    {
        $return_songs = [];
        #$flights = Translation::first();
        $flights = Translation::with('songs')->first();
        $flights = Translation::find(1)->songs;
        echo '<pre>';
        print_r($flights);
        echo '</pre>';
    }
}
