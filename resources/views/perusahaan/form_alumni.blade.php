<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tambah Perusahaan</title>
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
          <h2>Tambah Perusahaan</h2>
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
                <div class="info">
                    <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-center">
                        <form action="{{ route('perusahaan.create.alumni') }}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="n_perusahaan">Perusahaan</label>
                                <input type="text" name="n_perusahaan" value="{{ $perusahaan->n_perusahaan }}" class="form-control" id="n_perusahaan" placeholder="Masukkan nama perusahaan">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="kontak">Kontak</label>
                                <input type="text" value="{{ $perusahaan->kontak }}" class="form-control" name="kontak" id="kontak" placeholder="Masukkan kontak perusahaan">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="alamat">Alamat Perusahaan</label>
                                <input type="text"  value="{{ $perusahaan->alamat }}" class="form-control" name="alamat" id="alamat"  placeholder="Masukkan alamat perusahaan">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" value="{{ $perusahaan->deskripsi }}" class="form-control" name="deskripsi" id="deskripsi"  placeholder="Masukkan deskripsi perusahaan" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="0" {{ old('status', $perusahaan->status) == '0' ? 'selected' : '' }}>0</option>
                                    <option value="Posting" {{ old('status', $perusahaan->status) == 'Posting' ? 'selected' : '' }}>Posting</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <label for="foto">Foto Perusahaan</label>
                                <input type="file" class="form-control" name="foto" id="foto" >
                            </div>
                            <button type="submit" class="btn btn-primary">KIRIM</button>
                        </div>                 
                        </form>
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
