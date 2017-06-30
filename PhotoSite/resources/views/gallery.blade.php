<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gallery</title>
  </head>
  <body>
    <div class="row" style="margin-bottom:128px">

    @foreach ($filenames as $filename)
      <div class="third">
        <img src="../assets/gallery/{{$filename}}" style="width:100%">
      </div>
    @endforeach

    </div>
  </body>
</html>
