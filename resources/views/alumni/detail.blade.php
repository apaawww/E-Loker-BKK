<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Alumni</title>
</head>
<body>
    @extends('layouts.master')
    @section('content')
    <div class="container flex-grow-1 mb=0">
        <div class="card pt-0">
            <h5 class="card-header">Detail</h5>
            <div class="table-responsive text-nowrap">
                <div class="row">
                    <div class="col-md-2">
                        @if ($alumni->foto)
                            <img src="{{ asset('storage/' . $alumni->foto) }}" width="150" height="150" alt="Foto Alumni" >
                        @else
                            Foto tidak tersedia
                        @endif
                    </div>
                    <div class="col-md-10">
                        <table class="table card-table">
                            <tr>
                                <th>NISN</th>
                                <td>: {{ $alumni->nisn }}</td>
                            </tr>
                            <tr>
                                <th>NAMA LENGKAP</th>
                                <td>: {{ $alumni->nama }}</td>
                            </tr>
                            <tr>
                                <th>JENIS KELAMIN</th>
                                <td>: {{ $alumni->jk }}</td>
                            </tr>
                            <tr>
                                <th>TAHUN ANGKATAN</th>
                                <td>: {{ $alumni->thn_angkatan }}</td>
                            </tr>
                            <tr>
                                <th>KONTAK</th>
                                <td>: {{ $alumni->kontak }}</td>
                            </tr>
                            <tr>
                                <th>ALAMAT</th>
                                <td>: {{ $alumni->alamat }}</td>
                            </tr>
                            <tr>
                                <th>KATA SANDI</th>
                                <td>: {{ $alumni->password }}</td>
                            </tr>
                            <tr>
                                <th>KTP</th>
                                <td>: {{ $alumni->ktp }}</td>
                            </tr>
                            <tr>
                                <th>IJAZAH</th>
                                <td>: {{ $alumni->ijazah }}</td>
                            </tr>
                            <tr>
                                <th>TRANSKIP</th>
                                <td>: {{ $alumni->transkip_n }}</td>
                            </tr>
                            <tr>
                                <th>SKCK</th>
                                <td>: {{ $alumni->skck }}</td>
                            </tr>
                            <tr>
                                <th>SKS</th>
                                <td>: {{ $alumni->sks }}</td>
                            </tr>
                            <tr>
                                <th>KARTU KUNING</th>
                                <td>: {{ $alumni->kartu_kuning }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>                   
    @endsection
</body>
</html>