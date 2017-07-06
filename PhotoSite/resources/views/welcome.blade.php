<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Zack Beveridge</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">
    <!-- Stylesheet -->
    <script
      src="https://code.jquery.com/jquery-2.2.4.min.js"
      integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
      crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="../js/scripts.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel = "stylesheet" type = "text/css" href = "css/output.css" />
  </head>

  <body>
    <div class="page-container">
      <div class="welcome-wrapper">
        <div class="title">
          <h1>Zack Beveridge</h1>
        </div>
        <div class="container">
          <div class="sub-headers row">

            <div class="sub-title col-md-3">
              <h3><a href="/gallery">Photography</a></h3>
            </div>

            <div class="sub-title col-md-3" href="/graphics">
              <h3><a href="/graphics">Graphics</a></h3>
            </div>

            <div class="sub-title col-md-3">
              <h3><a href="/video">Video</a></h3>
            </div>

            <div class="sub-title col-md-3">
              <h3><a href="/about">About</a></h3>
            </div>

          </div>
        </div>
      </div>
      <div id="welcome-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          @foreach ($welcome as $key=>$welcome_image)
              <div class="item <?=($key==0)?'active':'';?>">
                <img class="d-block img-fluid" src="../assets/welcome/{{ $welcome_image->filename }}" alt="First slide">
              </div>
          @endforeach
        </div>
        <a class="left carousel-control" href="#welcome-carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#welcome-carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </body>
</html>
