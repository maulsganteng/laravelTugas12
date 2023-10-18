@extends('layout.master')

@section('judul')
Edit Cast
@endsection

@section('content')
<form action="/cast/{{$cast->id}}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="{{$cast->nama}}" class="form-control">
        @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Umur</label>
        <input type="number" name="umur" value="{{$cast->umur}}" class="form-control">
        @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Bio</label>
        <textarea name="bio" id="" class="form-control" cols="30" rows="10">{{$cast->bio}}</textarea>
        @error('bio')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection