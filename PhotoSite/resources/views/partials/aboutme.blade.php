<div class="about-content">
  <div class="container">
  @foreach ($content as $key=>$item)
    <div class="row">
      <div class="col-sm-12 text-wrapper">
        <h1 class="about-header">About</h1>
        <div class="line"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 text-wrapper">
        <div class="image-wrapper">
          <img class="gallery-image img-responsive" src="../assets/about/{{ $item->picture }}">
        </div>
      </div>
      <div class="col-sm-6 text-wrapper">
        <h3 class="about-text">{{ $item->summary }}</h3>
        <ul>
          <li class="dev-items">Laravel 5</li>
          <li class="dev-items">MYSQL Databases</li>
          <li class="dev-items">PHP</li>
          <li class="dev-items">JQUERY</li>
          <li class="dev-items">HTML 5</li>
          <li class="dev-items">CSS 3 (SASS)</li>
        </ul>
      </div>
    </div>
  @endforeach
</div>


<!-- Email Modal Trigger Button -->
<div class="container">
  <div class="row">
    <div class="col-sm-12 text-center" id="contact-button">
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#emailModal">Contact</button>
    </div>
  </div>
</div>
