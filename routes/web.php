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
    return view('welcome');
});

/*
Route::get('/home', function() {
    return view('home');
});
*/

Route::view('/home', 'home');

Route::get('/post/{id?}', function ($id = 1) {
    $posts = [
        1 => ['title' => 'Learn Laravel'],
        2 => ['title' => 'Learn Angular']
    ];
    return view('posts.post', ['data' => $posts[$id]]);
});
