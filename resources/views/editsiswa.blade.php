@extends('layout/admin')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  
<form action="{{ url('editsiswa/update/'.$siswa->id)}}" method="POST">
    @csrf
    @method('PATCH')

  <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
    <input type="text" name="nama" value="{{$siswa->nama}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Kelas</span>
    <input type="text" name="kelas" value="{{$siswa->kelas}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Jurusan</span>
    <input type="text" name="jurusan" value="{{$siswa->jurusan}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Nis</span>
    <input type="number" name="nis" value="{{$siswa->nis}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  </div>
  
  <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
    <option value="Pria">Pria</option>
    <option value="Wanita">Wanita</option>
  </select><br>

  <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Alamat</span>
    <input type="text" name="alamat" value="{{$siswa->alamat}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Telephone</span>
    <input type="number" name="telephone" value="{{$siswa->telephone}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Wali Kelas</span>
    <select class="form-select" name="guru_id" aria-label="Default select example">
        <option value="{{$siswa->guru_id}}">{{$siswa->guru->nama}}</option>
        @foreach ($guru as $data)
        <option value="{{$data->id}}">{{$data->nama}}</option>
        @endforeach
      </select>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

  </form>

@endsection