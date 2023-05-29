<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="/" class="logo d-flex align-items-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <img src="assets/img/logo.svg" alt="">
    </a>

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="/" class="active">Beranda</a></li>
        <li><a href="about.html">Klinik</a></li>
        <li><a href="services.html">Pelayanan</a></li>
        <li><a href="pricing.html">Tentang Kami</a></li>
      </ul>
      <ul>
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Selamat Datang, {{ auth()->user()->username }}
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="/dashboard">
                  <i class="bi bi-layout-text-sidebar-reverse"></i>My DashBoard
                </a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">
                      <i class="bi bi-box-arrow-right"></i>Logout
                    </button>
                  </form>
              </li>
            </ul>
          </li>    
        @else
          <li><a class="get-a-quote" href="/login">Masuk</a></li>
        @endauth
      </ul>
    </nav><!-- .navbar -->



  </div>
</header><!-- End Header -->