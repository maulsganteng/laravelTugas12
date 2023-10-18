@extends('layout.master')

@section('judul')
Halaman cast tampil
@endsection

@section('content')
<a href="/cast/create" class="btn btn-primary btn sm">Tambah</a>

<table class="table">
    <thead>
        <tr>
            <th scope="row">#</th>
            <th scope="row">nama</th>
            <th scope="row">umur</th>
            <th scope="row">bio</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($cast as $key => $value)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$value -> nama}}</td>
            <td>{{$value -> umur}}</td>
            <td>{{$value -> bio}}</td>
            <td>
                <form action="/cast/{{$value->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <a href="/cast/{{$value->id}}" class="btn btn-info btn-sm">Detail</a>
                    <a href="/cast/{{$value->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <input type="submit" value="delete" class="btn btn-danger btn-sm">
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td>tidak ada data</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection