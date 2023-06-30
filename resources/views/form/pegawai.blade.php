@extends('master')

@section('form')
<form action="/pegawai" method="POST">
  @csrf
    <div class="form-group">
      <label for="nama">Nama Pegawai</label>
      <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
    </div>
    @error('nama')
    <div class="alert alert-danger" role="alert">
      Isi dulu
    </div>
    @enderror
    <div class="form-group">
      <label for="tanggal">Tanggal lahir</label>
      <input type="date" class="form-control" id="tanggal" placeholder="tanggal" name="tanggal">
    </div>
    @error('tanggal')
    <div class="alert alert-danger" role="alert">
      Isi dulu
    </div>
    @enderror
    <div class="form-group">
      <label for="jabatan">Jabatan</label>
      <input type="text" class="form-control" id="jabatan" placeholder="Jabatan" name="jabatan">
    </div>
    @error('jabatan')
    <div class="alert alert-danger" role="alert">
      Isi dulu
    </div>
    @enderror
    <button type="submit" class="btn btn-primary">Kirim</button>
  </form>
@endsection