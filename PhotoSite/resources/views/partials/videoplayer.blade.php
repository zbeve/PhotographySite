<!-- Video Source Must be Embedd Code -->
@foreach($videos as $key => $video)
  <div class="video-wrapper">
    <iframe id="player-{{ $key }}" class="player" type="text/html" src="{{ $video->embed }}?&amp;rel=0" frameborder="0"></iframe>
  </div>
@endforeach
