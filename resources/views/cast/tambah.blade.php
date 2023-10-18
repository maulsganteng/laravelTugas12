@extends('layout.master')

@section('judul')
Halaman cast
@endsection

@section('content')
<form action="/cast" method="post">
    @csrf
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control">
        @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Umur</label>
        <input type="number" name="umur" class="form-control">
        @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Bio</label>
        <textarea name="bio" id="" class="form-control" cols="30" rows="10"></textarea>
        @error('bio')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection