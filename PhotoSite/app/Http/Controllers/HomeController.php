<?php

namespace App\Http\Controllers;

use DB;
use App;
use Storage;
use App\SocialFeeds;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Helpers\Instagram;

class HomeController extends Controller {


  public function about() {
    $limit = 12;
    $about = DB::table('about')->first();

    //Create Expire Files
    if(env('INSTAGRAM_API_ENABLED') && Storage::disk('local')->has('instagram.txt') === false) {
      Storage::disk('local')->put('instagram.txt', 0);
    }

    //Get Social
    if(env('INSTAGRAM_API_ENABLED') && Storage::disk('local')->get('instagram.txt') < time()) {
      if(!empty(env('INSTAGRAM_TOKEN'))) {
        $instagram = App::make(Instagram::class);
        $instagram->setAccessToken(env('INSTAGRAM_TOKEN'));
        $instagram->getAccessToken();
        //Connect and Return Results
        $response = $instagram->getUserMedia(env('INSTAGRAM_ID'), $limit);
        if(!empty($response->data)) $this->_process_feed($response->data, 'instagram', env('INSTAGRAM_ID'));
      }
    }

    //Pull All Feeds
    $items = SocialFeeds::orderBy('pubdate', 'asc')->get();
    //Rendor to View
    return view('layouts.about', [
      'content'   => compact('about'),
      'feeds'   => $items,
    ]);
  }

  //Set Expire Date to Social so pulls only once a day
  private function _setExpire($name) {
    $expire= strtotime('+24 hours');
    Storage::disk('local')->put($name.'.txt', $expire);
  }
  //Process Social Feeds to Databse
  private function _process_feed($response, $social, $user) {
    if(empty($social)) return null;
    if(!empty($response)) {
      //Delete Old Records
      SocialFeeds::where('type', $social)->delete();
      //Assign Expire for Cache
      $this->_setExpire($social);
      //Insert New Data
      foreach($response as $entry) {
          $feed_array = array();
          if($social == 'instagram') {
            $feed_array = array(
               'type' => 'instagram',
               'pubdate' => $entry->created_time,
               'user' => $user,
               'user_avatar_url' => 'https://scontent.cdninstagram.com/t51.2885-19/11324388_1116362095058297_2088231293_a.jpg',
               'feed_body' => $entry->caption->text,
               'feed_link' => $entry->link,
               'feed_image' => (!empty($entry->images->standard_resolution->url)) ? $entry->images->standard_resolution->url : '',
               'count' => (!empty($entry->comments->count)) ? $entry->comments->count : 0,
               'count_fav' => (!empty($entry->likes->count)) ? $entry->likes->count : 0
             );
          } else {
              continue;
            }
          SocialFeeds::create($feed_array);
      }
    }
  }
}
