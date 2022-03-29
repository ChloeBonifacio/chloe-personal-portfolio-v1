<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
      <a class="navbar-brand align-items-center d-flex" href="#">
          <img src="{{ URL::asset('/images/logo.png') }}" class="navbar-logo me-3" alt="Chloe Bonifacio">
          <div class="navbar-name">
            <h3 class="mb-0 fw-bold">Chloe Bonifacio</h3>
            <p class="my-0">Full Stack Developer</p>
          </div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-chevron-circle-down custom-pink"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-lg-auto w-50 w-md-75 nav-justified mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{(\Request::route()->getName() == 'home') ? 'active' : ''}}" href="{{ route('home') }}"><span class="link-num">01</span> Home</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link {{(\Request::route()->getName() == 'about') ? 'active' : ''}}" href="{{ route('about') }}"><span class="link-num">02</span> About</a>
          </li>  
          <li class="nav-item">
            <a class="nav-link {{(\Request::route()->getName() == 'works') ? 'active' : ''}}" href="{{ route('works') }}"><span class="link-num">03</span> Works</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link {{(\Request::route()->getName() == 'reach') ? 'active' : ''}}" href="{{ route('reach') }}"><span class="link-num">04</span> Reach</a>
          </li> 
        </ul>
      </div>
    </div>
</nav>