<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data Lowongan</title>
    </head>
<body>
    @extends('layouts.master') 
    @section('content')  
    <div class="container flex-grow-1 mb=0">
        <a href="{{ url('lowongan/add') }}" class="btn btn-primary mb-3">Tambah Data</a>
        <div class="card pt-0">
            <h5 class="card-header">Data Lowongan</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ALUMNI</th>
                            <th>ADMIN</th>
                            <th>PERUSAHAAN</th>
                            <th>LOKER</th>
                            <th>STATUS</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lowongan as $key => $item)
                        <tr>
                            <td>{{ $key+1 }}.</td>
                            <td>{{ $item->n_perusahaan }}</td>
                            <td>{{ $item->kontak }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <a href="{{ route('lowongan.edit', ['id' => $item->id_lowongan]) }}"" class="btn btn-outline-success btn-xs"><i class='bx bx-edit' ></i></a>
                                <a href="{{ route('lowongan.hapus', ['id' => $item->id_lowongan]) }}" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-outline-danger btn-xs"><i class='bx bx-trash'></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>
