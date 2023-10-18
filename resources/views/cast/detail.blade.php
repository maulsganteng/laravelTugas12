@extends('layout.master')

@section('judul')
Detail cast
@endsection

@section('content')

<h1>{{$cast -> nama}}</h1>
<h2>{{$cast -> umur}}</h2>
<p>{{$cast -> bio}}</p>

<a href="/cast" class="btn btn-secondary btn-sm">kembali</a>

@endsection