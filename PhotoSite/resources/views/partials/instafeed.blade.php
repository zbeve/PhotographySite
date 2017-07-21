<section class="container">
    <!-- Start News -->
    @if(!empty($feeds))
    <div class="social" id="social-feed">
      @php ($date_format = 'm.d.y')
      <!-- Start Social -->
			@foreach($feeds as $key => $item)
      <div class="{{ $item['type'] }}" data-time="{{ $item['pubdate'] }}">
        <div class="header clearfix">
          <i class="icons fa fa-{{ $item['type'] }} fa-2x"></i>
          <span class="datetime social pull-right"><i class="fa fa-clock-o"></i> {{ date($date_format, $item['pubdate']) }}</span>
        </div>
        <a href="{{ $item['feed_link'] }}" class="img-wrapper" target="_blank"><img src="{{ $item['feed_image'] }}" class="scale img-fluid"/></a>
        @if (!empty($item['feed_body']))
        <div class="grid-content">
          <p>{{ $item['feed_body'] }}</p>
        </div>
        @endif
        <div class="likes">
          <div class="rating">{{ $item['count'] }} <i class="fa fa-comments-o"></i><span>{{ @$vars['lang']['social']['likes'] }}</span></div>
          <div class="rating">{{ $item['count_fav'] }} <i class="fa fa-heart-o"></i><span>{{ @$vars['lang']['social']['favorited'] }}</span></div>
        </div>
      </div>
      @endforeach
    </div>
    @endif
</section>
