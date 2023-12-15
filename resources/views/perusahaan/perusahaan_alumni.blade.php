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
        <h2>Perusahaan</h2>
        <div class="edit-profile-btn pt-2 mb-2">
          <a href="{{ route('perusahaan.add_alumni') }}" class="btn btn-sm btn-outline-primary"><i class="bi bi-building-add"></i> Tambah</a>
        </div>
      </div>
      <div class="card">
        <div class="table-responsive text-nowrap">
          <table class="table table-hover">
              <thead>
                  <tr class="text-center">
                      <th>NO</th>
                      {{-- <th>FOTO</th> --}}
                      <th>NAMA PERUSAHAAN</th>
                      <th>KONTAK</th>
                      <th>ALAMAT</th>
                      <th>DESKRIPSI</th>
                      <th>STATUS</th>
                      <th>AKSI</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($perusahaanAlumni as $key => $perusahaan)
                  <tr>
                      <td>{{ $key+1 }}.</td>
                      {{-- <td>
                          <img src="/storage/{{ $perusahaan->foto }}" alt="" width="40" height="40" class="rounded-circle">
                      </td> --}}
                      <td>{{ $perusahaan->n_perusahaan }}</td>
                      <td>{{ $perusahaan->kontak }}</td>
                      <td>{{ $perusahaan->alamat }}</td>
                      <td>{{ $perusahaan->deskripsi }}</td>
                      <td>
                        @if ($perusahaan->status == 'Posting')
                            <span class="badge bg-success">{{ $perusahaan->status }}</span>
                        @elseif ($perusahaan->status == '0')
                            <span class="badge bg-warning">{{ $perusahaan->status }}</span>
                        @else
                            <span class="badge bg-secondary">{{ $perusahaan->status }}</span>
                        @endif
                    </td>
                      <td>
                          <a href="{{ route('perusahaan.hapus_alumni', ['id' => $perusahaan->id_perusahaan]) }}" onclick="return confirm('Are you sure you want to delete this perusahaan?')" class="btn btn-outline-danger btn-sm"><i class='bx bx-trash'></i></a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
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
