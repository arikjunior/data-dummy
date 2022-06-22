@extends('layouts.default')

@section('content')
    <section>
        <div class="container">
            <div class="position-relative">
                <div class="text-center">
                    <h1 class="mt-5">Daftar Penduduk</h1>
                    <a href="{{ url('create') }}" class="btn btn-primary mt-4">+ Penduduk</a>
                </div>
            </div>
            <table class="table mt-2">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">KTP</th>
                        <th class="text-center">Alamat</th>
                        <th class="text-center">Tanggal lahir</th>
                        <th class="text-center">Tempat lahir</th>
                        <th class="text-center">Agama</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Pekerjaan</th>
                        <th class="text-center">Kewarganegaraan</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dataPenduduk)
                    <tr>
                        <td>{{ $dataPenduduk->id }}</td>
                        <td>{{ $dataPenduduk->nama }}</td>
                        <td>{{ $dataPenduduk->ktp }}</td>
                        <td>{{ $dataPenduduk->alamat }}</td>
                        <td>{{ $dataPenduduk->tanggallahir }}</td>
                        <td>{{ $dataPenduduk->tempatlahir }}</td>
                        <td>{{ $dataPenduduk->agama }}</td>
                        <td>{{ $dataPenduduk->status }}</td>
                        <td>{{ $dataPenduduk->pekerjaan }}</td>
                        <td>{{ $dataPenduduk->wargaNegara }}</td>
                        <td>
                            <a href="{{ url('/show/'. $dataPenduduk->id) }}" class="m-2 text-decoration-none"><i class="bi bi-pencil-square text-warning"></i>
                            </a>
                            <a href="{{ url('/destroy/'. $dataPenduduk->id) }}" onclick="return confirm('Are you sure to delete?')"><i class="bi bi-x-square-fill text-danger"></i>
                            </a>
                        </td>
                    </tr>  
                    @endforeach
                </tbody>
            </table>   
        </div>
    </section>
@endsection