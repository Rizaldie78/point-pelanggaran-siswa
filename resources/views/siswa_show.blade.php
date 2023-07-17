@extends('layout/admin')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<h2>Anda sedang melihat detail dari {{ $siswa->nama }} </h2>

                <h1>{{$siswa->id}}</h1>
                <h1>{{$siswa->nama}}</h1>
                <h1>{{$siswa->kelas}}</h1>
                <h1>{{$siswa->jurusan}}</h1>
                <h1>{{$siswa->nis}}</h1>
                <h1>{{$siswa->jenis_kelamin}}</h1>
                <h1>{{$siswa->alamat}}</h1>
                <h1>{{$siswa->telephone}}</h1>
                <h1>{{$siswa->guru->nama}}</h1>
                <h1>{{$siswa->point}}</h1>

                <a href="/datasiswa"><button type="button" class="btn btn-danger">Kembali</button></a>

@endsection