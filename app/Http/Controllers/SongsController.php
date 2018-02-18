<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

#include this
use Illuminate\Support\Facades\DB;
use App\Song;
use App\Translation;
use Collective\Html;
use Illuminate\Database\Eloquent\Model;

#Traits
use App\Traits\MyTrait;

class SongsController extends Controller
{
 	#Traits
    use MyTrait; // <-- ...and also this line.

    public function api_index()
    {
    	echo 'None';
    }

    public function index()
    {
        #$songs = Song::get();
        #$songs = Song::songs();
        #$user = App\User::find(1);
		#$user->posts()->where('active', 1)->get();
		#$songs = Song::find(1);
		#$songs = Song;
		#$songs->test()->get();
        #echo '<pre>'; print_r($songs); echo '</pre>';

    	
        #$songs = [];
        #$songs = Song::get();
       # echo '<pre>'; print_r($songs); echo '</pre>';
        #return view('songs.index', ['songs' => $songs]);

        #$songs = Song::all();
        #return view('songs.index', ['songs' => $songs]);
    }

    public function all_songs($page=1)
    {
        #$songs = Song::all();
        #echo '<pre>'; print_r( $this->language_name('en') ); echo '</pre>';


        $return_songs = [];
        #$songs = Song::with('translations')->get();
        
        /*
        Customized: https://stackoverflow.com/questions/31747801/laravel-5-1-specifing-current-page-for-pagination
        */
        $per_page = 16;
        $songs = Song::with(['translations', 'artists'])->simplePaginate($per_page, ['*'], 'page', $page);

       # echo '<pre>'; print_r($songs); echo '</pre>';


        #foreach($songs as $song) {
        #    if(count ($song->translations) == 0) {
        #        $return_songs[] = $song;
        #    }
        #}

        #for($x = 0; $x < count($return_songs); $x++) {
        #    $song = $return_songs[$x];
        foreach($songs as $song) {
            $song->lang = $this->language_name($song->lang_code);
            foreach($song->translations as $translation) {
                $translation->lang = $this->language_name($translation->tr_code);
                #print('X:' . $translation->lang_code    . "<Br>");

                if( !strlen($translation->title_tr1)) {
                    $translation->title_tr1 = '(Untitled)';
                }
                if( !strlen($translation->title_tr2)) {
                    $translation->title_tr2 = '(Untitled)';
                }
            }
        }

        #echo '<pre>'; print_r($songs[0]->lang_code); echo '</pre>';
        return $songs;

        #$comments = Song::find(1)->translations;
        #return $comments;
        


        #return Song::all();
        #return Song::translations();

        #$books = Song::with('translations')->get();
       # return $books;



        /* Join */
        #$songs = Song::join('translations', 'songs.id', '=', 'translations.song_id')->get(['songs.title', 'translations.id', 'translations.lang_code', 'translations.title_tr1', 'translations.title_tr2']);
       
        #$songs = Song::join('translations', 'songs.id', '=', 'translations.song_id')
        #->select(['songs.title', 'songs.id', 'translations.lang_code'])
        #->get();

            #$songs = DB::table('songs')
            #->join('translations', 'songs.id', '=', 'translations.song_id')
            #->select('songs.title', 'songs.id', 'translations.id AS translation.id', 'translations.lang_code')
            #->all();
        
        #echo '<pre>'; print_r($songs); echo '</pre>';
        #return $songs;
    }



    public function song($id, $translationid)
    {


        #die('ID' . $id . ' - translationid - ' . $translationid . '<br>');
        //$song = Song::find($id)->translations;
/*
$song = DB::table('songs')
->


or

        $song = Song::with('translations')->where([
            ['id', '=', $id],
            ['translations.song_id', '=', '2']
        ])->first();
*/

    #die("ID: " . $id . " - " . $translationid);

#echo '<pre>'; 
#$song = Song::find(1);
#print_r($song);
#print_r($song->translations);
#print_r($song->artists);
#echo '</pre>';

#die();


$song = Song::join('translations', 'songs.id', '=', 'translations.song_id')->where([
    ['songs.id', '=', $id],
    #['translations.lang_code', '=', 'en'],
    ['translations.id', '=', $translationid]//,
    //['subscribed', '<>', '1'],
])->first();



#echo '<pre>'; print_r($song->artists); echo '</pre>';
#echo '<pre>'; print_r($song->lyrics_tr1); echo '</pre>';

    #print_r($song->lang_code);
    #print_r($song->tr_code);
    #die();

        $song->artists = $song->artists;

        //set the language name form the language code
        $song->lang = $this->language_name($song->lang_code);
        $song->tr_lang = $this->language_name($song->tr_code);
        #echo 'x;';
        #print_r($song->translation['lang_code']);
        #echo '<pre>';
        #print_r($song);
        #echo '</pre>';
        #echo '<hr>';

        $song->times = trim($song->times);
        $song->lyrics = trim($song->lyrics);
        $song->lyrics_tr1 = trim($song->lyrics_tr1);
        $song->lyrics_tr2 = trim($song->lyrics_tr2);

        $song->lyrics = str_replace("\n\n", "\n", $song->lyrics);
        $song->lyrics_tr1 = str_replace("\n\n", "\n", $song->lyrics_tr1);
        $song->lyrics_tr2 = str_replace("\n\n", "\n", $song->lyrics_tr2);

        $song->times = explode(",", $song->times);


        $song->lyrics = explode("\n", $song->lyrics);
        $song->lyrics_tr1 = explode("\n", $song->lyrics_tr1);
        $song->lyrics_tr2 = explode("\n", $song->lyrics_tr2);
/*
        print '---------------------------------------<br>' . "\n";
        print 'SONG DATA<br>';
        print 'lyrics: ' . count($song->lyrics) . '<br>' . "\n";
        print 'lyrics_tr1: ' . count($song->lyrics_tr1) . '<br>' . "\n";
        print 'lyrics_tr2: ' . count($song->lyrics_tr2) . '<br>' . "\n";
        print '---------------------------------------<br>' . "\n";
        print '---------------------------------------<br>' . "\n";
*/
        //$song->lyrics = array_diff($song->lyrics, ['']);
        //$song->lyrics_tr1 = array_diff($song->lyrics_tr1, ['']);
        //$song->lyrics_tr2 = array_diff($song->lyrics_tr2, ['']);

        #print(count($song->times) . ', ' . count($song->lyrics) . ', ' . count($song->lyrics_tr1) . ', ' . count($song->lyrics_tr2) ."<br>");

        if( count($song->times) != count($song->lyrics)) {
        #    print('[+] times incorrect: (' . count($song->times) . ') vs. (' . count($song->lyrics) . ')<br>');
        }

        if( count($song->lyrics_tr1) != count($song->lyrics)) {
        #    print('[+] lyrics_tr1 incorrect: (' . count($song->lyrics_tr1) . ') vs. (' . count($song->lyrics) . ')<br>');
            unset($song->title_tr1);
            unset($song->lyrics_tr1);
        }

        if( count($song->lyrics_tr2) != count($song->lyrics)) {
        #    print('[+] lyrics_tr2 incorrect: (' . count($song->lyrics_tr2) . ') vs. (' . count($song->lyrics) . ')<br>');
            unset($song->title_tr2);
            unset($song->lyrics_tr2);
        }

        //$song['times'] = explode(",", $song['times']);
        //$song['lyrics'] = explode("\n", $song['lyrics']);
        //return $song->toJson();
        #echo '<pre>'; print_r($song); echo '</pre>';
        return $song;
        

        #$song = Song::where('id', $id)->first();
        #echo '<pre>'; print_r($song); echo '</pre>';

        #$song = new Song();
        #echo '<pre>'; print_r($song->translations()); echo '</pre>';


        #$song = Song::find($id)->translations;
        #echo '<pre>'; print_r($song); echo '</pre>';
        #return view('songs.index', ['song' => $song]);
    }

    public function view($id)
    {
    	$song = Song::find($id)->translations;
        echo '<pre>'; print_r($song); echo '</pre>';
        return view('songs.index', ['song' => $song]);
    }
}
