@extends('layouts.main')
@section('container')
    <!-- ======= Register ======= -->
  <div class="login">
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                        <img src="assets/img/hero-side-img.svg" class="image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                        <h2 class="mb-0 mr-4 mt-2">Daftar E-Klinik</h2>
                    </div>
                    <form action="/register" method="post">
                        @csrf
                        <div class="row px-3 mb-4">
                            <label for="email" class="mb-1"><h6 class="mb-0 text-sm">Email</h6></label>
                            <input type="email" name="email" id="email" class="@error('email') is-invalid @enderror" placeholder="Masukkan email anda" required value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row px-3 mb-4">
                            <label for="username" class="mb-1"><h6 class="mb-0 text-sm">Nama pengguna</h6></label>
                            <input type="text" name="username" id="username" class=" @error('username') is-invalid @enderror" placeholder="Masukkan nama pengguna anda" required value="{{ old('username') }}">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row px-3 mb-4">
                            <label for="password" class="mb-1"><h6 class="mb-0 text-sm">Kata sandi</h6></label>
                            <input type="password" name="password" id="password" class="@error('password') is-invalid @enderror" placeholder="Masukkan kata sandi anda" required>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row px-3 mb-4">
                        </div>
                        <div class="row mb-3 px-3">
                            <button type="submit" class="btn btn-blue text-center">Daftar</button>
                        </div>
                    </form>
                    <div class="row mb-4 px-3">
                        <small class="font-weight-bold">Sudah punya akun? <a class="text-danger " href="/login">Masuk sekarang</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- End Register -->
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