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
        <a href="edit/{{$data->id}}">EDIT</a>

      </td>
      <td><form action="/delete/{{$data->id}}" method="POST">
        {{ csrf_field() }}
      <input type="submit" value="Delete" name="delete">
      <input type="hidden" value="DELETE" name="_method">
      </form></td>
    </tr>
    @endforeach
  </table>

@endsection
@section('namaview') readblade
@endsection
