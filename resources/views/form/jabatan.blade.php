@extends('master')

@section('form')
<form action="/jabatan" method="POST">
  @csrf
    <div class="form-group">
      <label for="nama">Nama Jabatan</label>
      <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
    </div>
    @error('nama')
    <div class="alert alert-danger" role="alert">
      Isi dulu
    </div>
    @enderror
    <button type="submit" class="btn btn-primary">Kirim</button>
  </form>
@endsection