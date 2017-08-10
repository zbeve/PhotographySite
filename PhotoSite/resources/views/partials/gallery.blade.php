<div class="container" id="grid">
  <div class="row" id="gallery-container">
    <div class="col-sm-12">
      @foreach($gallery as $key => $image)
        <div class="gallery-image-container" <?php if ($image->hidden == 'y'): ?> id="hidden" <?php endif; ?>>
            <h1>{{ $image->collection }}</h1>
            <div class="hover-shell">
              <a href="../assets/gallery/{{ $image->collection }}/{{ $image->filename }}.jpg" data-fancybox="{{ $image->collection }}" data-caption="{{ $image->name }}   -   Collection: {{ $image->collection }}"></a>
              <img class="gallery-image" src="../assets/gallery/{{ $image->collection }}/{{ $image->filename }}.jpg">
            </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
