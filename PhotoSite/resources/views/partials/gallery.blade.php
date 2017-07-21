<div class="container" id="grid">
  <div class="row" id="gallery-container">
    <div class="col-sm-12" id="column-1">
      @foreach($gallery as $key => $image)
        <div class="gallery-image-container" <?php if ($image->hidden == 'y'): ?> id="hidden" <?php endif; ?>>
            <h1>{{ $image->name }}</h1>
            <div class="hover-shell">
              <a href="../assets/gallery/{{ $image->filename }}" data-lightbox="{{ $image->collection }}" data-title="{{ $image->name }}  -  Collection: {{ $image->collection }}  -  {{ $image->size }}"></a>
              <img class="gallery-image" src="../assets/gallery/{{ $image->filename }}">
            </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
