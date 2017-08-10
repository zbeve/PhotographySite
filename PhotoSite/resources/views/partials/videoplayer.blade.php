<!-- Video Source Must be Embedd Code -->
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      @foreach($videos as $key => $video)
        <div class="video-wrapper">
          <div class="video-shell">
            <h1>{{ $video->name }}</h1>
            <a href="https://player.vimeo.com/video/{{ $video->code }}?color=ffffff" data-fancybox></a>
            <img class="video-thumbnail" src="/assets/video/{{ $video->thumbnail }}">
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
