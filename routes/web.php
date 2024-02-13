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
    $comics = config("comics");
    return view('home', compact('comics'));
})->name('homepage');

Route::get('/comics/{param}', function ($id) {
    $comics = config('comics');

    $comic = null;
    foreach ($comics as $item) {
        if ($item['id'] == $id) {
            $comic = $item;
        }
    }
    return view('detail_comic', compact('comic'));
})->name('detail-comic');
