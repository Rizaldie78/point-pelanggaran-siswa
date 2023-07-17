@extends('layout/admin')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<a class="btn btn-primary" href="guru/add_data" role="button">add</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nik</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
          </tr>
        </thead>
        <tbody>
            @foreach($guru as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->nik}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->jenis_kelamin}}</td>
                <td>{{$data->alamat}}</td>
                <td style="display: flex">
                    <button class="btn btn-danger"><a href="/guru/detail/{{ $data->id }}"><i class="fa-solid fa-circle-info"></i></a></button>
                
                    <form action="/guru/destroy/{{ $data->id }}" method="POST"
                        onsubmit="return confirm('KAMU YAKINN?!!?1!??!?!?!?')">
                        @csrf
                        @method('DELETE')
                       <button class="btn btn-danger"> <i  class="fa-solid fa-trash"></i></button>
                    </form>
                    <button class="btn btn-danger"><a href="/editguru/update/{{$data->id}}"><i class="fa-solid fa-pen-to-square"></i></a></button>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>

@endsection