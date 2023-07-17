@extends('layout/admin')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


<a class="btn btn-primary" href="laporan/add_data" role="button">add</a>
<table class="table">
                             <thead>
                                 <tr>
                                  <th scope="col">Guru</th> 
                                  <th scope="col">Siswa</th>
                                  <th scope="col">Laporan</th>
                                  <th scope="col">action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($laporan as $item)
                                <tr>
                                  <td>{{$item ->guru ->nama}}</td>
                                  @foreach ($item ->siswa as $siswa)
                                  <td>{{$siswa ->nama}}</td>
                                  @endforeach
                                  <td>{{$item ->pelanggaran->pelanggaran}}</td>
                                  <td style="display: flex">
                                    <button class="btn btn-danger"><a href="/laporan/detail/{{ $item->id }}"><i class="fa-solid fa-circle-info"></i></a></button>
                                
                                    <form action="/laporan/destroy/{{ $item->id }}" method="POST"
                                        onsubmit="return confirm('KAMU YAKINN?!!?1!??!?!?!?')">
                                        @csrf
                                        @method('DELETE')
                                       <button class="btn btn-danger"> <i  class="fa-solid fa-trash"></i></button>
                                    </form>
                                    <button class="btn btn-danger"><a href="/editlaporan/update/{{$item->id}}"><i class="fa-solid fa-pen-to-square"></i></a></button>
                                  </td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>

@endsection