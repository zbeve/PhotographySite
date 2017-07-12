    <!-- Header and Buttons -->
    <div id="welcome-container" class="page-container">
      <div class="welcome-wrapper">
        <div class="title">
          <h1>Zack Beveridge</h1>
        </div>
        <div class="container">
          <div class="sub-headers row">

            <a href="/photography">
              <div class="sub-title col-md-3">
                <h3>Photography</h3>
              </div>
            </a>

            <a href="/graphics">
              <div class="sub-title col-md-3">
                <h3>Graphics</h3>
              </div>
            </a>

            <a href="/video">
              <div class="sub-title col-md-3">
                <h3>Video</h3>
              </div>
            </a>

            <a href="/about">
              <div class="sub-title col-md-3">
                <h3>About</h3>
              </div>
            </a>

          </div>
        </div>
      </div>
      <!-- Background Carousel -->
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
