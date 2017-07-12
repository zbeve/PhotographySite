<div class="container" id="grid">
  <div class="row" id="gallery-container">
    <div class="col-sm-12" id="column-1">
      @foreach($gallery as $key => $image)
        <div class="gallery-image-container" id="item-{{ $key }}">
            <h1>{{ $image->name }}</h1>
            <div class="hover-shell">
              <a href="../assets/gallery/{{ $image->filename }}" data-lightbox="gallery" data-title="{{ $image->name }}"></a>
              <img class="gallery-image" src="../assets/gallery/{{ $image->filename }}">
            </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
