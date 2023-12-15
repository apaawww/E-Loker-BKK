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
    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container-xxl flex-grow-1">
            <div class="row">
                <div class="card mb-2 pt-0 mt-0">
                    <h5 class="mb-3 pt-3">Tambah Data</h5>
                        <div class="col-lg-12 col-6">
                        <div class="row">
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-name">Nama Admin</label>
                            <input type="text" class="form-control" value="{{ $admin->nama }}" id="nama" name="nama" placeholder="Nama Admin" />
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-company">Email</label>
                            <input type="text" class="form-control" value="{{ $admin->email }}" id="email" name="email" placeholder="Email" />
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-company">Kata Sandi</label>
                            <input type="password" class="form-control" value="{{ $admin->password }}" id="password" name="password" placeholder="Kata Sandi" />     
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-company">Kontak</label>
                            <input type="text" class="form-control" value="{{ $admin->kontak }}" id="kontak" name="kontak" placeholder="Kontak" />
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="formFileMultiple" class="form-label">Foto</label>
                            <input class="form-control" type="file" id="foto" name="foto" multiple />
                        </div>
                    </div>
                </div>   
                </div>
                <button type="submit" value="{{ $tombol }}" class="btn btn-primary">SIMPAN</button>
                </div>
            </div>
        </div>
    </form>
    @endsection
</body>
</html>