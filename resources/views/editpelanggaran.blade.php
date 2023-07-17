@extends('layout/admin')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  
<form action="{{ url('editpelanggaran/update/'.$pelanggaran->id)}}" method="POST">
    @csrf
    @method('PATCH')

  <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">pelanggaran</span>
    <input type="text" name="pelanggaran" value="{{$pelanggaran->pelanggaran}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Tindak Lanjut</span>
    <input type="text" name="tindak_lanjut" value="{{$pelanggaran->tindak_lanjut}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Point</span>
    <input type="number" name="point" value="{{$pelanggaran->point}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection