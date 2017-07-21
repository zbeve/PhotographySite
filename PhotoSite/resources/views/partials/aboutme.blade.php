<div class="about-content">
  <div class="container">
  @foreach ($content as $key=>$item)
    <div class="row">
      <div class="col-xs-7 text-wrapper">
        <h1 class="about-header">About Me</h1>
        <h3 class="about-text">{{ $item->summary }}</h3>
      </div>
      <div class="col-xs-5 image-wrapper">
        <img class="gallery-image" src="../assets/about/{{ $item->picture }}">
      </div>
    </div>
  @endforeach
</div>
