<div class="container" id="graphics-grid">
  <div class="row" id="graphics-container">
    <div class="col-sm-12">
      @foreach($graphics as $key => $design)
        <div class="graphics-image-container" <?php if ($design->hidden == 'y'): ?> id="hidden" <?php endif; ?>>
            <h1>{{ $design->collection }}</h1>
            <div class="graphics-shell">
              <a href="../assets/graphics/{{ $design->filename }}.jpg" data-fancybox="{{ $design->collection }}" data-caption="{{ $design->name }}   -   {{ $design->size }}   -   Collection: {{ $design->collection }}"></a>
              <img class="design" src="../assets/graphics/{{ $design->filename }}.jpg">
            </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
