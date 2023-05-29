@extends('layouts.main')

@section('container')
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">Selamat Datang di E-Klinik</h2>
          <p data-aos="fade-up" data-aos-delay="100">Nikmati Kemudahan dalam memesan Tiket Antrean Pelayanan Kesehatan secara Online, Tanpa Batas Waktu dan Kesibukan Anda!</p>

          <form action="/login" class="d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
            @csrf
            <button type="submit" class="btn btn-primary">Gabung Sekarang</button>
          </form>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="assets/img/hero-side-img.svg" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">

    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3>E-Klinik</h3>
            <p>
              Website E-Klinik memiliki tujuan untuk memberikan kemudahan bagi pasien dalam melakukan pendaftaran periksa klinik secara online, Selain itu website ini juga menyediakan informasi riwayat pemeriksaan pasien yang dapat di akses dengan mudah. E-Klinik juga memiliki beberapa fitur di antaranya:            </p>
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h5>Pelayanan Kesehatan Klinik</h5>
                  <p>Pasien dapat mendaftar pelayanan kesehatan klinik dengan cepat dan mudah.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                  <h5>Cek Riwayat Periksa</h5>
                  <p> Pasien akan mendapatkan informasi mengenai hasil dari pemeriksaan klinik.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-broadcast"></i>
                <div>
                  <h5>Informasi Kesehatan Terkini</h5>
                  <p>Akan disajikan informasi mengenai perkembangan maupun berita terkini mengenai kesehatan masyarakat</p>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Layanan</span>
          <h2>Layanan</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Daftar Klinik</h3>
              <ul>
                <li><i class="bi bi-check"></i> Mitra klinik yang terpercaya dan Berkulaitas</li>
                <li><i class="bi bi-check"></i> Dokter yang berkompeten, berpengalaman, dan terampil.</li>
                <li><i class="bi bi-check"></i> Pelayanan klinik yang ramah, profesional, dan berpengalaman. </li>
              </ul>
              <a href="#" class="buy-btn">Lihat Sekarang</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item featured">
              <h3>Registrasi Pelayanan</h3>
              <ul>
                <li><i class="bi bi-check"></i> Registrasi pelayanan yang mudah, cepat, dan efisien.</li>
                <li><i class="bi bi-check"></i> Keamanan Data Pengguna yang Aman dan Dilindungi</li>
                <li><i class="bi bi-check"></i> Akses layanan bisa dimanapun dan kapanpun.</li>
              </ul>
              <a href="#" class="buy-btn">Daftar Sekarang</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-item">
              <h3>Cek Riwayat Periksa</h3>
              <ul>
                <li><i class="bi bi-check"></i> Informasi yang diberikan akurat dan terpercaya</li>
                <li><i class="bi bi-check"></i> Akses yang mudah dan cepat terhadap informasi kesehatan Anda</li>
                <li><i class="bi bi-check"></i> Akses catatan kesehatan Anda, termasuk diagnosis, resep obat, dan hasil tes.</li>
              </ul>
              <a href="#" class="buy-btn">Lihat Sekarang</a>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>
    </section><!-- End Pricing Section -->


    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Berita</span>
          <h2>Berita</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/berita1.svg" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Cegah Kanker Pemerintah Gencarkan Program Promotif dan Preventif</a></h3>
              <p>Layanan Kanker merupakan prioritas dalam Transformasi sistem kesehatan di Indonesia. Salah satunya dengan memaksimalkan ketersediaan layanan kanker di 514 Kabupaten/Kota di Indonesia. ...</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/berita1.svg" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Cegah Kanker Pemerintah Gencarkan Program Promotif dan Preventif</a></h3>
              <p>Layanan Kanker merupakan prioritas dalam Transformasi sistem kesehatan di Indonesia. Salah satunya dengan memaksimalkan ketersediaan layanan kanker di 514 Kabupaten/Kota di Indonesia. ...</p>
           </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/berita1.svg" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Cegah Kanker Pemerintah Gencarkan Program Promotif dan Preventif</a></h3>
              <p>Layanan Kanker merupakan prioritas dalam Transformasi sistem kesehatan di Indonesia. Salah satunya dengan memaksimalkan ketersediaan layanan kanker di 514 Kabupaten/Kota di Indonesia. ...</p>
           </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/berita1.svg" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Cegah Kanker Pemerintah Gencarkan Program Promotif dan Preventif</a></h3>
              <p>Layanan Kanker merupakan prioritas dalam Transformasi sistem kesehatan di Indonesia. Salah satunya dengan memaksimalkan ketersediaan layanan kanker di 514 Kabupaten/Kota di Indonesia. ...</p>
           </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/berita1.svg" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Cegah Kanker Pemerintah Gencarkan Program Promotif dan Preventif</a></h3>
              <p>Layanan Kanker merupakan prioritas dalam Transformasi sistem kesehatan di Indonesia. Salah satunya dengan memaksimalkan ketersediaan layanan kanker di 514 Kabupaten/Kota di Indonesia. ...</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/berita1.svg" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Cegah Kanker Pemerintah Gencarkan Program Promotif dan Preventif</a></h3>
              <p>Layanan Kanker merupakan prioritas dalam Transformasi sistem kesehatan di Indonesia. Salah satunya dengan memaksimalkan ketersediaan layanan kanker di 514 Kabupaten/Kota di Indonesia. ...</p>
           </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section><!-- End Services Section -->


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>E-Klinik</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Rujukan </h4>
          <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Klinik</a></li>
            <li><a href="#">Pelayanan</a></li>
            <li><a href="#">Tentang Kami</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Layanan Kami</h4>
          <ul>
            <li><a href="#">Registrasi Antrian</a></li>
            <li><a href="#">Cek Riwayat Periksa</a></li>
              <li><a href="#">Daftar Klinik</a></li>
            <li><a href="#">Informasi Kesehatan</a></li>
            
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Kontak Kami</h4>
          <p>
            Jalan Pemuda No.34 <br>
            Kota Semarang 535022<br>
            Indonesia <br><br>
            <strong>Telepon:</strong> 08912356789<br>
            <strong>Email:</strong> eklinik@gmail.com<br>
          </p>
        </div>
      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>E-Klinik</span></strong>. All Rights Reserved
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>
@endsection