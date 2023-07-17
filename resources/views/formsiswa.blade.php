@extends('layout/admin')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<form action="/siswa/add_data" method="POST">
    @csrf

  <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
    <input type="text" name="nama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  </div>

 <select class="form-select" name="kelas" aria-label="Default select example">
  <option selected>Kelas</option>
  <option value="1">X</option>
  <option value="2">XI</option>
  <option value="3">XII</option>
</select><br> 

  <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Jurusan</span>
    <input type="text" name="jurusan"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Nis</span>
    <input type="number" name="nis" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  </div>
  
  <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
    <option value="Pria">Pria</option>
    <option value="Wanita">Wanita</option>
  </select><br> 

  <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Alamat</span>
    <input type="text" name="alamat" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Telephone</span>
    <input type="number" name="telephone" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
    <input type="email" name="email"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  </div>

  <select class="form-select" name="guru_id" aria-label="Default select example">
    @foreach ($guru as $data)
    <option value="{{$data->id}}">{{$data->nama}}</option>
    @endforeach
  </select><br>

  <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Point</span>
    <input type="number" name="point"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

  </form>

@endsection