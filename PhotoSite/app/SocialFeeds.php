<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialFeeds extends Model
{
  protected $fillable = ['id', 'type','pubdate','user','user_avatar_url','feed_link','feed_body','feed_image', 'count', 'count_fav'];
  protected $table = 'social_feeds';
  public $timestamps = false;
}
