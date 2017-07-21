<?php
namespace App\Helpers;

use Illuminate\Support\Str;

class Helper
{
    public static function words($value, $words = 100, $end = '...') {
      return Str::words($value, $words, $end);
    }
    public static function lang($lang) {
      $languages = array('en' => 'en-US', 'cn' => 'zh');
      return isset($languages[$lang]) ? $languages[$lang] : $lang;
    }
    public static function format_contentful_by_name($content) {
      $contents = [];
      if(!empty($content)) {
        foreach($content as $key => $entry) {
          if(!empty($entry->getName())) $contents[snake_case($entry->getName())] = $entry;
        }
      }
      return $contents;
    }
    public static function format_contentful_by_bundle($content) {
      $contents = [];
      if(!empty($content)) {
        foreach($content as $key => $entry) {
          print_r($entry->getBundle());
          if(!empty($entry->getBundle())) $contents[snake_case($entry->getBundle())] = $entry;
        }exit;
      }
      return $contents;
    }
    public static function format_contentful_by_tag($content) {
      $contents = [];
      if(!empty($content)) {
        foreach($content as $key => $entry) {
          if(!empty($entry->getTags())) $contents[snake_case($entry->getTags()[0])][] = $entry;
        }
      }
      return $contents;
    }
    public static function contentful_filter_retailer($assets, $vars) {
      if(empty($assets)) return null;
      $array = [];
      foreach($assets as $store) {
        $country = $store->getRegion();
        $retailer = $store->getRetailer();
        $url = $store->getListingUrl();
        $ps4 = $store->getPs4Url();
        $xbox = $store->getXboxUrl();
        $pc = $store->getPcUrl();
        $system = (!empty($vars['lang']['content']['system'])) ? $vars['lang']['content']['system'] : 'system';
        $array[$country][$retailer][] = array(
          $system => $url,
          'ps4' => $ps4,
          'xbox' => $xbox,
          'pc' => $pc,
        );
      }
      return json_encode($array);
    }
    public static function formatDateForJson(\DateTimeImmutable $dt) {
        $dt = $dt->setTimezone(new \DateTimeZone('Etc/UTC'));
        return $dt->format('Y-m-d\TH:i:s.') . str_pad(floor($dt->format('u')/1000), 3, '0', STR_PAD_LEFT) . 'Z';
    }
}
