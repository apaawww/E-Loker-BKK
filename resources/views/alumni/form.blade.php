<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
    @extends('layouts.master')
    @section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{  $action  }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container-xxl flex-grow-1">
            <div class="row">
                <div class="card mb-2 pt-0 mt-0">
                    <h5 class="mb-3 pt-3">Tambah Data</h5>
                        <div class="col-lg-12 col-6">
                        <div class="row">
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-name">Nisn</label>
                            <input type="text" class="form-control" value="{{ $alumni->nisn }}" id="nisn" name="nisn" placeholder="Nisn" />
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-company">Nama Lengkap</label>
                            <input type="text" class="form-control" value="{{ $alumni->nama }}" id="nama" name="nama" placeholder="Nama Lengkap" />
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-company">Tanggal lahir</label>
                            <input type="date" class="form-control" value="{{ $alumni->ttl }}" id="ttl" name="ttl" placeholder="Tempat tanggal lahir" />     
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-company">Jenis Kelamin</label><br>
                            <input type="radio" name="jk" id="jk" value="L" {{ $alumni->jk=="L"?"checked":"" }}> Laki-laki <br>
                            <input type="radio" name="jk" id="jk" value="P" {{ $alumni->jk=="P"?"checked":"" }}> Perempuan   
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-company">Tahun Angkatan</label>
                            <input type="text" class="form-control" value="{{ $alumni->thn_angkatan }}" id="thn_angkatan" name="thn_angkatan" placeholder="Tahun Angkatan" />                             
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-company">Kontak</label>
                            <input type="text" class="form-control" value="{{ $alumni->kontak }}" id="kontak" name="kontak" placeholder="Kontak" />
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-company">Alamat</label>
                            <input type="text" class="form-control" value="{{ $alumni->alamat }}" id="alamat" name="alamat" placeholder="Alamat"/>                           
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label for="formFileMultiple" class="form-label">Foto</label>
                            <input class="form-control" type="file" id="foto" name="foto" multiple />
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label for="formFileMultiple" class="form-label">KTP</label>
                            <input class="form-control" type="file" id="ktp" name="ktp" multiple />                              
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label for="formFileMultiple" class="form-label">Ijazah</label>
                            <input class="form-control" type="file" id="ijazah" name="ijazah" multiple />                           
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label for="formFileMultiple" class="form-label">Transkip nilai</label>
                            <input class="form-control" type="file" id="transkip_n" name="transkip_n" multiple />                       
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label for="formFileMultiple" class="form-label">SKCK</label>
                            <input class="form-control" type="file" id="skck" name="skck" multiple />                                                
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label for="formFileMultiple" class="form-label">SKS</label>
                            <input class="form-control" type="file" id="sks" name="sks" multiple />                                                 
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label for="formFileMultiple" class="form-label">Kartu kuning</label>
                            <input class="form-control" type="file" id="kartu_kuning" name="kartu_kuning" multiple />
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="col-form-label" for="basic-default-company">Kata Sandi</label>
                            <input type="password" class="form-control" value="{{ $alumni->password }}" id="password" name="password" placeholder="Kata Sandi" />                           
                        </div>
                    </div>
                </div>
                </div>
                <input type="submit" class="btn btn-primary" value="{{ $tombol }}">
                </div>
            </div>
        </div>
    </form>
    @endsection
</body>
</html>