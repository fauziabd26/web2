<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedulehaji extends Model
{
protected $table="schedulehaji";
protected $primaryKey="no";
protected $fillable=['id','nama_acara','tempat','tanggal','waktu'];
}
