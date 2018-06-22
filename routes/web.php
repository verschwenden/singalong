<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/songview', function () {
    return view('songview');
});

Route::get('/api/', 'SongsController@api_index');
Route::get('/api/songs', 'SongsController@all_songs');
Route::get('/api/songs/{page}', 'SongsController@all_songs');
#Route::get('/api/song/{id}', 'SongsController@song');
Route::get('/api/song/{id}/translation/{translationid}', 'SongsController@song');
Route::get('/api/translations', 'TranslationsController@all_songs');