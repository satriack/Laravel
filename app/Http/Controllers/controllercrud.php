<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa; //filename model
use Exception;

class controllercrud extends Controller
{
    function input(){
      return view('input');
    }

    function insert(Request $request){
      try{
      $siswa = new siswa; //new objek harus sama dengan model filename

      //$objek->property = $request->property
      //    field di DB          name di view
      $siswa->name = $request->nama;
      $siswa->email = $request->email;
      $siswa->password = $request->password;

      $siswa->save(); //function save
      return redirect('/read'); //arahkan ke controller input

      }catch(Exception $exception)
        {
            throw new \App\Exceptions\CustomException('email sudah digunakan');
        }
    }

    function read(){
      $siswa = siswa::all();

      return view('read')
      ->with('siswa',$siswa)
      ->with('num',1);
    }
}
