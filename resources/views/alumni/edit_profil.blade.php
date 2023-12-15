<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Profil</title>
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
          <h2>Edit Profil</h2>
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
                <div class="info">
                    <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-center">
                        <form action="{{  route('alumni.update', ['alumni' => $alumni->nisn])  }}"" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="nisn">Nisn</label>
                                <input type="text" name="nisn" value="{{ $alumni ? $alumni->nisn : '' }}" class="form-control" id="nisn" placeholder="Masukkan nisn">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" value="{{ $alumni->nama }}" class="form-control" name="nama" id="nama" placeholder="Masukkan nama">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ttl">Tanggal Lahir</label>
                                <input type="date"  value="{{ $alumni->ttl }}" class="form-control" name="ttl" id="ttl">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="jk">Jenis Kelamin</label><br>
                                <input type="radio" name="jk" id="jk" value="L" {{ $alumni->jk=="L"?"checked":"" }}> Laki-laki <br>
                                <input type="radio" name="jk" id="jk" value="P" {{ $alumni->jk=="P"?"checked":"" }}> Perempuan   
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tahun_angkatan">Tahun Angkatan</label>
                                <input type="text" value="{{ $alumni->thn_angkatan }}" class="form-control" name="tahun_angkatan" id="tahun_angkatan" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="kontak">Kontak</label>
                                <input type="text" value="{{ $alumni->kontak }}" class="form-control" name="kontak" id="kontak" placeholder="Masukkan kontak" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="alamat">Alamat</label>
                                <input type="text" value="{{ $alumni->alamat }}" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="foto">Foto Profil</label>
                                <input type="file" class="form-control" name="foto" id="foto" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ktp">KTP</label>
                                <input type="file" class="form-control" name="ktp" id="ktp" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ijazah">Ijazah</label>
                                <input type="file" class="form-control" name="ijazah" id="ijazah" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="transkip_n">Transkip Nilai</label>
                                <input type="file" class="form-control" name="transkip_n" id="transkip_n" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="skck">SKCK</label>
                                <input type="file" class="form-control" name="skck" id="skck" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="sks">SKS</label>
                                <input type="file" class="form-control" name="sks" id="sks" >
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <label for="kartu_kuning">Kartu Kuning</label>
                                <input type="file" class="form-control" name="kartu_kuning" id="kartu_kuning" >
                            </div>
                            <button type="submit" class="btn btn-primary">SIMPAN</button>
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
