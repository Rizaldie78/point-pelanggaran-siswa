@extends('layout/admin')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<form action="/laporan/add_data" method="POST" enctype="multipart/form-data">
    @csrf
    <select class="form-select" name="siswa_id" aria-label="Default select example">
        @foreach ($siswa as $data)
        <option value="{{$data->id}}">{{$data->nama}}</option>
        @endforeach
      </select><br>

      <select class="form-select" name="guru_id" aria-label="Default select example">
        @foreach ($guru as $data)
        <option value="{{$data->id}}">{{$data->nama}}</option>
        @endforeach
      </select><br>

  <select class="form-select" name="pelanggaran_id" aria-label="Default select example">
    @foreach ($pelanggaran as $data)
    <option value="{{$data->id}}">{{$data->pelanggaran}}</option>
    @endforeach
  </select><br>

  <button type="submit" class="btn btn-primary">Submit</button>

  </form>

@endsection