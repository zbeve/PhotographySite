<div class="container" id="graphics-grid">
  <div class="row" id="graphics-container">
    <div class="col-sm-12">
      @foreach($graphics as $key => $design)
        <div class="graphics-image-container <?php if ($design->visible == 'y'): ?>visible<?php endif; ?>" <?php if ($design->visible != 'y'): ?> id="hidden" <?php endif; ?>>
            <h1>{{ $design->collection }}</h1>
            <div class="graphics-shell">
              <a href="../assets/graphics/{{ $design->collection }}/{{ $design->filename }}.jpg" data-fancybox="{{ $design->collection }}" data-caption="Collection: {{ $design->collection }}   -   {{ $design->name }}"></a>
              <img class="design" src="../assets/graphics/{{ $design->collection }}/{{ $design->filename }}.jpg">
            </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
