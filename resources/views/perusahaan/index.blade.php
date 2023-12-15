<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data Perusahaan</title>
    </head>
<body>
    @extends('layouts.master') 
    @section('content')  
    <div class="container flex-grow-1 mb=0">
        <a href="{{ route('perusahaan.add') }}" class="btn btn-primary mb-3">Tambah Data</a>
        <div class="card pt-0">
            <h5 class="card-header">Data Perusahaan</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>FOTO</th>
                            <th>NAMA PERUSAHAAN</th>
                            <th>KONTAK</th>
                            <th>ALAMAT</th>
                            <th>DESKRIPSI</th>
                            <th>STATUS</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perusahaan as $key => $item)
                        <tr>
                            <td>{{ $key+1 }}.</td>
                            <td>
                                <img src="/storage/{{ $item->foto }}" alt="" width="40" height="40" class="rounded-circle">
                            </td>
                            <td>{{ $item->n_perusahaan }}</td>
                            <td>{{ $item->kontak }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <a href="{{ route('admin.edit', ['id' => $item->id_perusahaan]) }}"" class="btn btn-outline-success btn-xs"><i class='bx bx-edit' ></i></a>
                                <a href="{{ route('admin.hapus', ['id' => $item->id_perusahaan]) }}" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-outline-danger btn-xs"><i class='bx bx-trash'></i></a>
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
