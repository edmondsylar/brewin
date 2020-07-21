  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}"> <small>Brewin</small> | <small>Foundation</small></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <small> <span class="oi oi-menu"></span> Menu</small>
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="{{ url('/news') }}" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="{{ url('/events') }}" class="nav-link">Gallery</a></li>
          <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">About Us</a></li>
          <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact us</a></li>
          {{-- <li class="nav-item"><a href="{{ url('/login') }}" class="nav-link">Login</a></li> --}}
        </ul>
      </div>
    </div>
  </nav>
