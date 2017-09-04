<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid" id="navfluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigationbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
        <img class="brand" src="../assets/zb_brand_logo_grey.png">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="navigationbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="{{ Request::is('photography') ? 'active' : '' }}"><a href="{{ url('photography') }}">Photography</a></li>
        <li class="{{ Request::is('graphics') ? 'active' : '' }}"><a href="{{ url('graphics') }}">Graphics</a></li>
        <li class="{{ Request::is('video') ? 'active' : '' }}"><a href="{{ url('video') }}">Video</a></li>
        <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ url('about') }}">About</a></li>
      </ul>
    </div>
  </div>
</nav>
