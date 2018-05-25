@extends('layouts.frame')
@section('title') Read
@endsection
@section('header') Read Page
@endsection
@section('content')
<form action="/input" method="post">
  {{ csrf_field() }}
  <table border="1">
    <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Password</th>
    </tr>
    @foreach ($siswa as $data)
    <tr>
      <td>{{$num++}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->password}}</td>
    </tr>
    @endforeach
    <tr>
      <td colspan="4" style="text-align:right;">
        <input type="submit" value="Submit">
      </td>
    </tr>
  </table>
</form>
@endsection
@section('namaview') readblade
@endsection
