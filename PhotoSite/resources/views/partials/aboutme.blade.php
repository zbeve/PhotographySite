<div class="about-content">
  <div class="container">
  @foreach ($about as $key=>$content)
    <div class="row">
      <div class="col-md-7 text-wrapper">
        <h1 class="about-header">About Me</h1>
        <h3 class="about-text">{{ $content->summary }}</h3>
      </div>
      <div class="col-md-5 image-wrapper">
        <img class="gallery-image" src="../assets/about/{{ $content->picture }}">
      </div>
    </div>
  @endforeach
</div>
