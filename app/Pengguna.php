<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
protected $table="pengguna";
protected $primaryKey="id";
protected $fillable=['id','email','username','password','alamat'];
}
