
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>  BKK SMK YPC TASIKMALAYA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/page/img/ypc.ico" rel="icon">
  <link href="/page/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ ('/page/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ ('/page/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ ('/page/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ ('/page/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ ('/page/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ ('/page/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ ('/page/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ ('/page/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">BKK SMK YPC TASIKMALAYA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="/page/img/logo.png" alt="" class="img-fluid"></a>-->

    @if (!Auth::guard('alumni')->check())
    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="page.lowongan">Lowongan</a></li>
            <li><a class="nav-link scrollto" href="#portfolio">Perusahaan</a></li>
            <li><a class="getstarted scrollto" href="login_alumni">LOGIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    @else
    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="page.lowongan">Lowongan</a></li>
            <li><a class="nav-link scrollto" href="#portfolio">Perusahaan</a></li>
            <li class="dropdown">
                <a href="#"><span>Riwayat</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a href="#">Lamaran</a></li>
                    <li><a href="{{ route('perusahaan.show_alumni') }}">Perusahaan</a></li>
                    <li><a href="#">Lowongan</a></li>
                </ul>
            </li>
            <li class="dropdown">
              <a class="getstarted scrollto" href="login_user"><span>{{ Auth::guard('alumni')->user()->nama }}</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="{{ route('alumni.profil') }}">Profil</a></li>
                <li><a href="{{ route('logout.alumni') }}">Keluar</a></li>
              </ul>
            </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    @endif

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Selamat Datang !</h1>
          <h2>
            Solusi lebih baik untuk anda yang sedang mencari pekerjaan
            Kami adalah Tim Bursa Kerja Khusus yang berada di
            SMK YPC TASIKMALAYA
          </h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="/page/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section><!-- End Hero -->
  <main id="main">
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">
        <div class="row" data-aos="zoom-in">
          {{-- <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="/page/img/clients/client-6.png" class="img-fluid" alt="">
          </div> --}}
        </div>
      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= Lowongan Section ======= -->
    {{-- <section class="lowongan" class="py-3 mt-4 pt-4" >
      <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-colls-md-3 row-cols-xl-4 justify-content-center">
          @foreach($lowongan as $item)
            <div class="col mb-5">
              <div class="card h-100" style="width: 14rem;">
                  <div class="card-body p-4 text-center">
                    <h5 class="card-title">{{ $item->nama_loker }}</h5>
                      <p class="card-text">{{ $item->gaji}}</p>
                      <p class="card-text">{{ $item->pendidikan}}</p>
                      <p class="card-text">{{ $item->tipe_pekerjaan}}</p>
                      <a href="lowongan/detail/{{ $item->id}}" class="btn btn-sm btn-primary text-white">Detail</a>
                  </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section> --}}
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Arsha</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ ('/page/vendor/aos/aos.js') }}"></script>
  <script src="{{ ('/page/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ ('/page/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ ('/page/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ ('/page/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ ('/page/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ ('/page/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ ('/page/js/main.js') }}"></script>

</body>

</html>