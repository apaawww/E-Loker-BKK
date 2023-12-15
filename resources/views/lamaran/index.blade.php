<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Alumni</title>
</head>
<body>
    @extends('layouts.master') 
    @section('content')  
    <div class="container flex-grow-1 mb=0">
        {{-- <a href="{{ url('alumni/add') }}" class="btn btn-primary mb-3">Tambah Data</a> --}}
        <div class="card pt-0">
            <h5 class="card-header">Data Alumni</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NISN</th>
                            <th>LAMARAN</th>
                            <th>CV</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lamaran as $key => $item)
                        <tr>
                            <td>{{ $key+1 }}.</td>
                            <td>{{ $item->nisn }}</td>
                            <td>{{ $item->surat_lamaran }}</td>
                            <td>{{ $item ->cv}}</td>
                            <td>
                                <a href="{{ route('lamaran.detail', ['id' => $item->id_lamaran]) }}"" class="btn btn-outline-info btn-xs"><i class='bx bx-detail' ></i></a>
                                {{-- <a href="{{ route('alumni.edit', ['id' => $item->nisn]) }}"" class="btn btn-outline-success btn-xs"><i class='bx bx-edit' ></i></a> --}}
                                <a href="{{ route('lamaran.hapus', ['id' => $item->id_lamaran]) }}" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-outline-danger btn-xs"><i class='bx bx-trash'></i></a>
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
