<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
    {{-- @extends('layouts.master')
    @section('content') --}}
    <form action="{{ route('lowongan.create') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container-xxl flex-grow-1">
            <div class="row">
                <div class="card mb-2 pt-0 mt-0">
                    <h5 class="mb-3 pt-3">Tambah Data</h5>
                        <div class="col-lg-12 col-6">
                        <div class="row">
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-name">Lowongan</label>
                            <input type="text" class="form-control" value="{{ $lowongan->nama_loker }}" id="nama_loker" name="nama_loker" placeholder="Lowongan" />
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-company">Syarat</label>
                            <input type="text" class="form-control" value="{{ $lowongan->syarat }}" id="syarat" name="syarat" placeholder="Syarat" />
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-company">Keahlian</label>
                            <input type="text" class="form-control" value="{{ $lowongan->keahlian }}" id="keahlian" name="keahlian" placeholder="Keahlian" />     
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-company">Kualifikasi</label>
                            <input type="text" class="form-control" value="{{ $lowongan->kualifikasi }}" id="kualifikasi" name="kualifikasi" placeholder="Kualifikasi" />
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-company">Jam Kerja</label>
                            <input type="text" class="form-control" value="{{ $lowongan->jamker }}" id="jamker" name="jamker" placeholder="Jam Kerja" />
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-company">Gaji</label>
                            <input type="text" class="form-control" value="{{ $lowongan->gaji }}" id="gaji" name="gaji" placeholder="Gaji" />
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-company">Pendidikan</label>
                            <input type="text" class="form-control" value="{{ $lowongan->pendidikan }}" id="pendidikan" name="pendidikan" placeholder="Pendidikan" />
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-company">Tipe Pekerjaan</label>
                            <input type="text" class="form-control" value="{{ $lowongan->tipe_pekerjaan }}" id="tipe_pekerjaan" name="tipe_pekerjaan" placeholder="Tipe Pekerjaan" />
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-company">Tanggal Posting</label>
                            <input type="date" class="form-control" value="{{ $lowongan->tgl_post }}" id="tgl_post" name="tgl_post" placeholder="Tanggal Posting" />
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-company">Tanggal Konfirmasi</label>
                            <input type="date" class="form-control" value="{{ $lowongan->tgl_konfir }}" id="tgl_konfir" name="tgl_konfir" placeholder="Tanggal Konfirmasi" />
                        </div>
                        <div class="col-lg-6 mb-0">
                            <label class="col-form-label" for="basic-default-company">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="0" {{ $lowongan->status == 0 ? 'selected' : '' }}>0</option>
                                <option value="Posting" {{ $lowongan->status == 'Posting' ? 'selected' : '' }}>Posting</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3 pt-4">
                        <button type="submit" value="{{ $tombol }}" class="btn btn-primary">SIMPAN</button>
                    </div>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{-- @endsection --}}
</body>
</html>