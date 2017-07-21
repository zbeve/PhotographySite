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

    $graphics = DB::table('graphics')->get();

    return view('layouts.graphics', compact('graphics'));
});

Route::get('/video', function () {

    $videos = DB::table('videos')->get();

    return view('layouts.video', compact('videos'));
});

Route::get('/about', 'HomeController@about');

// Generate a Instagram login URL to get Token
Route::get('/instagram/login', function() {
  $ins = App::make(App\Helpers\Instagram::class);
  $scope = array('public_content');
  $login_url = $ins->getLoginUrl($scope);
  echo '<a href="' . $login_url . '">Login with Instagram</a>';
});

// Callback Instagram to get Token
Route::get('/instagram/callback', function() {
  $ins = App::make(App\Helpers\Instagram::class);
  $code = $_GET['code'];
  if(!empty($code)) {
    $data = $ins->getOAuthToken($code, true);
    dd($data);
  }
});
