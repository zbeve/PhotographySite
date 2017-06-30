<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gallery</title>
    <!-- Stylesheet -->
    <link rel = "stylesheet" type = "text/css" href = "css/output.css" />
  </head>
  <body>
    <div class="row">
      <div class="column">
        @foreach ($gallery as $image)
          <div class="gallery-image-container">
            <img class="gallery-image" src="../assets/gallery/{{ $image->filename }}">
          </div>
        @endforeach
      </div>
    </div>
  </body>
</html>
