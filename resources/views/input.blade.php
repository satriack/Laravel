@extends('layouts.frame')
@section('title') Input
@endsection
@section('header') Input Page
@endsection
@section('content')
<form action="/input" method="post">
  {{ csrf_field() }}
  <table>
    <tr>
      <td>Nama</td>
      <td><input type="text" placeholder="nama" name="nama"></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="text" placeholder="youremail@example.com"  name="email"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" placeholder="password" name="password"></td>
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
</form>
@endsection
@section('namaview') inputblade
@endsection
