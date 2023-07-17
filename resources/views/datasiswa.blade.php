@extends('layout/admin')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<a class="btn btn-primary" href="siswa/add_data" role="button">add</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th> 
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Nis</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Telephone</th>
            <th scope="col">Wali Kelas</th>
            <th scope="col">Point</th>
          </tr>
        </thead>
        <tbody>
            @foreach($siswa as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->kelas}}</td>
                <td>{{$data->jurusan}}</td>
                <td>{{$data->nis}}</td>
                <td>{{$data->jenis_kelamin}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->telephone}}</td>
                <td>{{$data->guru->nama}}</td>
                <td>{{$data->point}}</td>
                <td style="display: flex">
                    <button class="btn btn-danger"><a href="/siswa/detail/{{ $data->id }}"><i class="fa-solid fa-circle-info"></i></a></button>
                
                    <form action="/siswa/destroy/{{ $data->id }}" method="POST"
                        onsubmit="return confirm('KAMU YAKINN?!!?1!??!?!?!?')">
                        @csrf
                        @method('DELETE')
                       <button class="btn btn-danger"> <i  class="fa-solid fa-trash"></i></button>
                    </form>
                    <button class="btn btn-danger"><a href="/editsiswa/update/{{$data->id}}"><i class="fa-solid fa-pen-to-square"></i></a></button>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>

@endsection