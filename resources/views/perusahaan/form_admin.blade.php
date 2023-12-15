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
    <form action="{{ route('perusahaan.create.admin') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container-xxl flex-grow-1">
            <div class="row">
                <div class="card mb-2 pt-0 mt-0">
                    <h5 class="mb-3 pt-3">Tambah Data</h5>
                        <div class="col-lg-12 col-6">
                        <div class="row">
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-name">Perusahaan</label>
                            <input type="text" class="form-control" value="{{ $perusahaan->n_perusahaan }}" id="n_perusahaan" name="n_perusahaan" placeholder="Nama Perusahaan" />
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-company">Kontak</label>
                            <input type="text" class="form-control" value="{{ $perusahaan->kontak }}" id="kontak" name="kontak" placeholder="Kontak" />
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-company">Alamat</label>
                            <input type="text" class="form-control" value="{{ $perusahaan->alamat }}" id="alamat" name="alamat" placeholder="Alamat" />     
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-company">Deskripsi</label>
                            <input type="text" class="form-control" value="{{ $perusahaan->deskripsi }}" id="deskripsi" name="deskripsi" placeholder="Deskripsi" />
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-company">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="0" {{ old('status', $perusahaan->status) == '0' ? 'selected' : '' }}>0</option>
                                <option value="Posting" {{ old('status', $perusahaan->status) == 'Posting' ? 'selected' : '' }}>Posting</option>
                            </select>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="formFileMultiple" class="form-label">Foto</label>
                            <input class="form-control" type="file" id="foto" name="foto" multiple />
                        </div>
                    </div>
                </div>
            </div>
            <button  type="submit" value="{{ $tombol }}" class="btn btn-primary">SIMPAN</button>   
                </div>
            </div>
        </div>
    </form>
    @endsection
</body>
</html>