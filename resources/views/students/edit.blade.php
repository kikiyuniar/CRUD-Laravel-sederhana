@extends('layout.main')
@section('title', 'Form Ubah Data Mahasiswa')

@section('container') 
<div class = "container" > 
    <div class="row">
      <div class="col-8">
      <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>

      <form method="POST" action="{{ url('/students/') }}/{{ $student->id }}">
        @method('patch')
        @csrf
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" value="{{ $student->nama }}" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama">
          @error('nama')
          <div class="invalid-feedback">{{ $message }}</div>  
          @enderror

        </div>
        <div class="form-group">
          <label for="npm">NPM</label>
          <input type="text" value="{{ $student->NPM }}" class="form-control  @error('npm') is-invalid @enderror" id="npm" placeholder="Masukkan NPM" name="npm">
          @error('npm')
          <div class="invalid-feedback">{{ $message }}</div>  
          @enderror
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" value="{{ $student->email }}" class="form-control" id="email" placeholder="Masukkan Email" name="email">
        </div>
        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <input type="text" value="{{ $student->jurusan }}" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan">
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
        <a href="{{ url('/students') }}/{{ $student->id }}" class="card-link">Kembali</a>
      </form>

      </div>
    </div> 
</div>
@endsection