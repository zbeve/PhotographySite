    <div class="container" id="grid">
      <div class="row">
        <div class="col-sm-12" id="column-1">
          @foreach($gallery as $image)
              <div class="gallery-image-container">
                <img class="gallery-image" src="../assets/gallery/{{ $image->filename }}">
              </div>
          @endforeach
        </div>
      </div>
    </div>
