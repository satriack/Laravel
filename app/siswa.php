<?php
  //filename model & classname model harus sama dengan tablename di DB
namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{

  //protected $table = "siswas";
  //jika tabel di database berakhiran -s
  //maka tidak perlu ditulis

  //nama field yang ada di database
  protected $fillable = [
      'name', 'email'
  ];

  protected $hidden = [
      'password', 'remember_token',
  ];
}
