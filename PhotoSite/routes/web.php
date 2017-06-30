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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/video', function () {
    return view('video');
});

Route::get('/gallery', function () {

  $filenames = [
    'GT86-1.jpg',
    'IMG_3537.jpg',
    'IMG_3662.jpg',
  ];
  
    return view('gallery', compact('filenames'));
});

Route::get('/graphics', function () {
    return view('graphics');
});
