<!-- Navbar -->
<div class="container">
  <nav
    class="row navbar navbar-expand-lg navbar-light bg-white"
  >
    <a href="{{ route('home') }}" class="navbar-brand">
      <img
        src="{{ url('./frontend/images/logo.png') }}"
        alt="Logo Nomads"
      />
    </a>
    <button
      class="navbar-toggler navbar-toggler-right"
      type="button"
      data-toggle="collapse"
      data-target="#navb"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div
      class="collapse navbar-collapse"
      id="navb"
    >
      <ul class="navbar-nav ml-auto mr-3">
        <li class="nav-item mx-md-2">
          <a 
            href="{{ route('home') }}" 
            class="nav-link {{ Request::is('/') ? 'active' : '' }}"
          >
            Home
          </a>
        </li>
        <li class="nav-item mx-md-2">
          <a  
            href="/packages"   
            class="nav-link {{ Request::is('packages') ? 'active' : '' }}" 
          >
            Paket Travel
          </a>
        </li>
        <li class="nav-item dropdown mx-md-2">
          <a
            href="#"
            class="nav-link dropdown-toggle"
            id="navbardrop"
            data-toggle="dropdown"
          >
            Services
          </a>
          <div class="dropdown-menu">
            <a href="" class="dropdown-item">
              Link
            </a>
            <a href="" class="dropdown-item">
              Link
            </a>
            <a href="" class="dropdown-item">
              Link
            </a>
          </div>
        </li>
        <li class="nav-item mx-md-2">
          <a href="#" class="nav-link">
            Testimonial
          </a>
        </li>
      </ul>

      @guest
      <!-- Mobile Button -->
      <form
        action=""
        class="form-inline d-sm-block d-md-none"
      >
        <button 
          class="btn btn-custom-alpha my-sm-0 my-2"
          onclick="event.preventDefault(); 
            location.href='{{ url('login') }}';"
          type="button"
        >
          Masuk
        </button>
      </form>
      <!-- Desktop Button -->
      <form
        action=""
        class="form-inline my-2 my-lg-0 d-none d-md-block"
      >
        <button
          class="btn btn-custom-alpha btn-navbar-right my-2 my-sm-0 px-4"
          onclick="event.preventDefault(); 
            location.href='{{ url('login') }}';"
          type="button"
        >
          Masuk
        </button>
      </form>
      @endguest

      @auth
      <!-- Mobile Button -->
      <form
        action="{{ url('logout') }}"
        method="POST"
        class="form-inline d-sm-block d-md-none"
      >
        @csrf
        <button 
          type="submit"
          class="btn btn-custom-alpha my-sm-0 my-2"
        >
          Keluar
        </button>
      </form>
      <!-- Desktop Button -->
      <form
        action="{{ url('logout') }}"
        method="POST"
        class="form-inline my-2 my-lg-0 d-none d-md-block"
      >
        @csrf
        <button
          type="submit"
          class="btn btn-custom-alpha btn-navbar-right my-2 my-sm-0 px-4"
        >
          Keluar
        </button>
      </form>
      @endauth
    </div>
  </nav>
</div>