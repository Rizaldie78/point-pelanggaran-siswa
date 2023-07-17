@extends('layout/admin')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  
<form action="{{ url('editguru/update/'.$guru->id)}}" method="POST">
    @csrf
    @method('PATCH')

  <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Nik</span>
    <input type="number" name="nik" value="{{$guru->nik}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
    <input type="text" name="nama" value="{{$guru->nama}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  </div>

  <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
    <option value="Pria">Pria</option>
    <option value="Wanita">Wanita</option>
  </select><br>

  <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Alamat</span>
    <input type="text" name="alamat" value="{{$guru->alamat}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection