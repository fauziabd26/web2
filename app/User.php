<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
protected $table="user";
protected $primaryKey="no";
protected $fillable=['id','email','username','password','alamat','no-Telp'];
}
