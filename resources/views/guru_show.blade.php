@extends('layout/admin')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

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
            <td class="table-info">{{$guru->id}}</td>
            <td class="table-info">{{$guru->nama}}</td>
            <td class="table-info">{{$guru->nama}}</td>
            <td class="table-info">{{$guru->jenis_kelamin}}</td>
            <td class="table-info">{{$guru->alamat}}</td>
          </tr> 
        </tbody>
      </table>

                <a href="/dataguru"><button type="button" class="btn btn-danger">Kembali</button></a>

@endsection