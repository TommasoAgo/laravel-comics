<?php

use Illuminate\Support\Facades\Route;

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
    $comics_array = config('comics');

    $data = [
        'comics_array' => $comics_array
    ];

    return view('home', $data);
})->name('home');

Route::get('/comic/{id}', function ($id) {
    $comics_array = config('comics');

    $single_comic = [];
    foreach($comics_array as $comic) {
        if($comic['id'] === (int)$id) {
            $single_comic = $comic;
        }
    }
    
    // Se non trovo il fumetto, errore, errore 404
    if(empty($single_comic)) {
        abort('404');
    }

    $data = [
        'single_comic' => $single_comic
    ];
    
    // Altrimenti, stampo la view della pagina
    return view('comic', $data);
})->name('comic');
