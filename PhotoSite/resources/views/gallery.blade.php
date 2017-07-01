<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gallery</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel = "stylesheet" type = "text/css" href = "css/output.css" />
  </head>
  <body>
    <div class="container" id="grid">
      <div class="row">
        <div class="col-sm-4" id="column-1">
          <?php foreach($gallery as $image):?>
            <?php if ($image->column == 1): ?>
              <div class="gallery-image-container">
                <img class="gallery-image" src="../assets/gallery/{{ $image->filename }}">
              </div>
            <?php endif; ?>
          <?php endforeach ?>
        </div>
        <div class="col-sm-4" id="column-2">
          <?php foreach($gallery as $image):?>
            <?php if ($image->column == 2): ?>
              <div class="gallery-image-container">
                <img class="gallery-image" src="../assets/gallery/{{ $image->filename }}">
              </div>
            <?php endif; ?>
          <?php endforeach ?>
        </div>
        <div class="col-sm-4" id="column-3">
          <?php foreach($gallery as $image):?>
            <?php if ($image->column == 3): ?>
              <div class="gallery-image-container">
                <img class="gallery-image" src="../assets/gallery/{{ $image->filename }}">
              </div>
            <?php endif; ?>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </body>
</html>
