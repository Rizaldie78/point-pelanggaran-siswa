@extends('layout/admin')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<a class="btn btn-primary" href="pelanggaran/add_data" role="button">add</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Pelanggaran</th>
            <th scope="col">Tindak Lanjut</th>
            <th scope="col">Jumlah Point</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach($pelanggaran as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->pelanggaran}}</td>
                <td>{{$data->tindak_lanjut}}</td>
                <td>{{$data->point}}</td>
                <td style="display: flex">
                    <button class="btn btn-danger"><a href="/pelanggaran/detail/{{ $data->id }}"><i class="fa-solid fa-circle-info"></i></a></button>
                
                    <form action="/pelanggaran/destroy/{{ $data->id }}" method="POST"
                        onsubmit="return confirm('KAMU YAKINN?!!?1!??!?!?!?')">
                        @csrf
                        @method('DELETE')
                       <button class="btn btn-danger"> <i  class="fa-solid fa-trash"></i></button>
                    </form>
                    <button class="btn btn-danger"><a href="/editpelanggaran/update/{{$data->id}}"><i class="fa-solid fa-pen-to-square"></i></a></button>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>

@endsection