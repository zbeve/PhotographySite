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

    $welcome = DB::table('welcome')->get();

    return view('layouts.home', compact('welcome'));
});

Route::get('/photography', function () {

    $gallery = DB::table('gallery')->get();

    return view('layouts.photography', compact('gallery'));
});

Route::get('/graphics', function () {

    return view('layouts.default');
});

Route::get('/video', function () {

    $videos = DB::table('videos')->get();

    return view('layouts.video', compact('videos'));
});

Route::get('/about', function () {

    $about = DB::table('about')->get();

    return view('layouts.about', compact('about'));
});
