@extends('layouts.frame')
@section('title') Edit
@endsection
@section('header') Edit Page
@endsection
@section('content')
<form action="/edit/{{$siswa->id}}" method="post">
  {{ csrf_field() }}
  <table>
    <tr>
      <td>Nama</td>
      <td><input type="text" placeholder="nama" name="nama" value="{{$siswa->name}}"></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="text" placeholder="youremail@example.com" name="email" value="{{$siswa->email}}"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" placeholder="password" name="password" value="{{$siswa->password}}"></td>
    </tr>
    <tr>
    </tr>
    <tr>
      <td>
        <input type="submit" value="Submit">
      </td>
      <td></td>
    </tr>
  </table>
  <input type="hidden" name="_method" value="put">
</form>
@endsection
@section('namaview') editblade
@endsection
