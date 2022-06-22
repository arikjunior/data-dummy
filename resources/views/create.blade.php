@extends('layouts.default')

@section('content')
    <section>
        <div class="container">

            <div class="p-5 m-5">
                <div class="text-center">
                    <h1>Data Penduduk Baru</h1>
                </div>
                <form action="{{ url('/store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
                    @csrf
                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama..." required>
                    </div>
                    <div class="mb-3">
                      <label for="ktp" class="form-label">Nomor KTP</label>
                      <input type="number" name="ktp" class="form-control" placeholder="Masukkan Nomor KTP..." required>
                    </div>
                    <div class="mb-3">
                      <label for="alamat" class="form-label">Alamat</label>
                      <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat..." required></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="tgllahir" class="form-label">Tanggal lahir</label>
                      <input type="date" name="tanggallahir" class="form-control" required>
                    </div>
                    <div class="mb-3">
                      <label for="tmplahir" class="form-label">Tempat Lahir</label>
                      <input type="text" name="tempatlahir" class="form-control" placeholder="Masukkan Tempat Lahir..." required>
                    </div>
                    <div class="mb-3">
                      <label for="agama" class="form-label">Agama</label>
                      <input type="text" name="agama" class="form-control" placeholder="Masukkan Agama..." required>
                    </div>
                    <div class="mb-3">
                      <label for="status" class="form-label">Status</label>
                      <input type="text" name="status" class="form-control" placeholder="Masukkan Status..." required>
                    </div>
                    <div class="mb-3">
                      <label for="pekerjaan" class="form-label">Pekerjaan</label>
                      <input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan..." required>
                    </div>
                    <div class="mb-3">
                      <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                      <input type="text" name="wargaNegara" class="form-control" placeholder="Masukkan Kewarganegaraan..." required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                  </form>   
                  <div class="text-center">
                    <a href="{{ url('/') }}" class="btn btn-dark">Back</a>
                  </div>
                </div> 
        </div>
    </section>
@endsection