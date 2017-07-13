<div class="container" id="graphics-grid">
  <div class="row" id="graphics-container">
    <div class="col-sm-12" id="g-column-1">
      @foreach($graphics as $key => $design)
        <div class="graphics-image-container" id="graphics-item-{{ $key }}">
            <h1>{{ $design->name }}</h1>
            <div class="graphics-shell">
              <a href="../assets/graphics/{{ $design->filename }}" data-lightbox="{{ $design->collection }}" data-title="{{ $design->name }}  -  Collection: {{ $design->collection }}  -  {{ $design->size }}"></a>
              <img class="design" src="../assets/graphics/{{ $design->filename }}">
            </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
