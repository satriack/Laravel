@extends('layouts.frame')
@section('title') Read
@endsection
@section('header') Read Page
@endsection
@section('content')

  <a href="{{url('input')}}"> Tambah Data</a>
  <table border="1">
    <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Password</th>
      <th colspan="2">Action</th>
    </tr>
    @foreach ($siswa as $data)
    <tr>
      <td>{{$num++}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->password}}</td>
      <td>
        <a href="#">EDIT</a>

      </td>
      <td><form action="/delete/{{$data->id}}" method="POST">
        {{ csrf_field() }}
      <input type="submit" value="delete">
      </form></td>
    </tr>
    @endforeach
    <tr>
      <td colspan="5" style="text-align:right;">
        <input type="submit" value="Submit">
      </td>
    </tr>
  </table>

@endsection
@section('namaview') readblade
@endsection
