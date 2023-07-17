@extends('layout/admin')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<h2>Anda sedang melihat detail dari {{ $pelanggaran->nama }} </h2>

<table class="table-info">
<thead>
    <tr class="table-info">
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
    <tbody>
        <tr class="table-info">
        <td class="table-info">{{$pelanggaran->id}}</td>
        <td class="table-info">{{$pelanggaran->pelanggaran}}</td>
        <td class="table-info">{{$pelanggaran->tindak_lanjut}}</td>
        <td class="table-info">{{$pelanggaran->point}}</td>
      </tr> 
    </tbody>
  </table>

      <a href="/jenispelanggaran"><button type="button" class="btn btn-danger">Kembali</button></a>

@endsection