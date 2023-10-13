@extends('layout.master')

@section('judul')
Buat akun baru
@endsection

@section('subjudul')
sign up from
@endsection
@section('content')
<form action="/kirim" method="post">
    @csrf
    <label>First Name :</label><br>
    <input type="text" name="namee"><br><br>
    <label>Last Name :</label><br>
    <input type="text" name="name"><br><br>
    <Label>Gender :</Label><br>
    <br>
    <input type="radio">Male<br>
    <input type="radio">Famale<br>
    <input type="radio">Other<br>
    <br>
    <label>Nationality :</label><br>
    <br>
    <input type="Nationality" name="Nationality"><br><br>
    <label>Language Spoken :</label><br>
    <input type="checkbox" name="Language Spoken">Bahasa Indonesai<br>
    <input type="checkbox" name="Language Spoken">Bahasa Inggris<br>
    <input type="checkbox" name="Language Spoken">Other<br>
    <br>
    <label> Bio :</label><br>
    <br>
    <form acation="/welcome">
        <textarea name="massage" rows="10" cols="30"></textarea>
        <br><br>
        <input type="submit" value="kirim">
    </form>
    @endsection