<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Profil</title>
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
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Profil</h2>
        @if(Auth::guard('alumni')->user()->foto)
          <img src=" /storage/{{ Auth::guard('alumni')->user()->foto }} " alt="" class="rounded-circle" width="100" height="100">
        @else
          Foto tidak tersedia.
        @endif 
        <div class="edit-profile-btn pt-2 mb-2">
          <a href="{{ route('alumni.edit', ['id' => Auth::guard('alumni')->user()->nisn]) }}" class="btn btn-sm btn-outline-primary"><i class='bx bx-edit' ></i> Edit</a>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-md-10">
          <div class="info">
            <div class="username">
              <i class="bi bi-app-indicator"></i>
              <h4>Nisn: </h4>
              <p>{{ Auth::guard('alumni')->user()->nisn }}</p>
            </div>
            <div class="username">
              <i class="bi bi-person-circle"></i>
              <h4>Nama Lengkap: </h4>
              <p>{{ Auth::guard('alumni')->user()->nama }}</p>
            </div>
            <div class="birth">
              <i class="bi bi-calendar-event"></i>
              <h4>Tempat Tanggal Lahir: </h4>
              <p>{{ Auth::guard('alumni')->user()->ttl }}</p>
            </div>
            <div class="jk">
              <i class="bi bi-people-fill"></i>
              <h4>Jenis Kelamin:</h4>
              <p>{{ Auth::guard('alumni')->user()->jk }}</p>
            </div>

            <div class="tahun_angkatan">
              <i class="bi bi-archive"></i>
              <h4>Tahun Angkatan:</h4>
              <p>{{ Auth::guard('alumni')->user()->thn_angkatan }}</p>
            </div>

            <div class="kontak">
              <i class="bi bi-telephone"></i>
              <h4>Kontak:</h4>
              <p>{{ Auth::guard('alumni')->user()->kontak }}</p>
            </div>

            <div class="alamat">
              <i class="bi bi-geo-alt"></i>
              <h4>Alamat:</h4>
              <p>{{ Auth::guard('alumni')->user()->alamat }}</p>
            </div>

            {{-- <div class="password">
              <i class="bi bi-key"></i>
              <h4>Kata Sandi:</h4>
              <p>{{ Auth::guard('alumni')->user()->password }}</p>
            </div> --}}

            <div class="ktp">
              <i class="bi bi-file-earmark-text"></i>
              <h4>KTP:</h4>
              <p>
                @if(Auth::guard('alumni')->user()->ktp)
                  <a href="{{ Auth::guard('alumni')->user()->ktp }}" target="_blank"> KTP sudah diisi</a>
                @else
                  KTP belum diisi.
                @endif
              </p>
            </div>

            <div class="ijazah">
              <i class="bi bi-file-earmark-text"></i>
              <h4>Ijazah:</h4>
              <p>
                @if(Auth::guard('alumni')->user()->ijazah)
                <a href="{{ Auth::guard('alumni')->user()->ijazah }}" target="_blank">  Ijazah sudah diisi</a>
                @else
                  Ijazah belum diisi.
                @endif
              </p>
            </div>

            <div class="transkip">
              <i class="bi bi-file-earmark-text"></i>
              <h4>Transkip Nilai:</h4>
              <p>
                @if(Auth::guard('alumni')->user()->transkip_n)
                <a href="{{ Auth::guard('alumni')->user()->transkip_n }}" target="_blank"> Transkip Nilai sudah diisi</a>
                @else
                  Transkip Nilai belum diisi.
                @endif
              </p>
            </div>

            <div class="kartu_kuning">
              <i class="bi bi-file-earmark-text"></i>
              <h4>Kartu Kuning:</h4>
              <p>
                @if(Auth::guard('alumni')->user()->kartu_kuning)
                <a href="{{ Auth::guard('alumni')->user()->kartu_kuning }}" target="_blank"> Kartu Kuning sudah diisi</a>
                @else
                  Kartu Kuning belum diisi.
                @endif
              </p>
            </div>

            <div class="sks">
              <i class="bi bi-file-earmark-text"></i>
              <h4>SKS:</h4>
              <p>
                @if(Auth::guard('alumni')->user()->sks)
                <a href="{{ Auth::guard('alumni')->user()->sks }}" target="_blank"> SKS sudah diisi</a>
                @else
                  SKS belum diisi.
                @endif
              </p>
            </div>

            <div class="skck">
              <i class="bi bi-file-earmark-text"></i>
              <h4>SKCK:</h4>
               <p>
                @if(Auth::guard('alumni')->user()->skck)
                <a href="{{ Auth::guard('alumni')->user()->skck }}" target="_blank"> SKCK sudah diisi</a>
                @else
                  SKCK belum diisi.
                @endif
               </p>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  
</body>
<script src="{{ ('/page/vendor/aos/aos.js') }}"></script>
<script src="{{ ('/page/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ ('/page/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ ('/page/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ ('/page/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ ('/page/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ ('/page/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ ('/page/js/main.js') }}"></script>

</html>
