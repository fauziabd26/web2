<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paket extends Model
{
    protected $table="paket";
	protected $primaryKey="id";
	protected $fillable=['id','name','durasi','tanggal','penerbangan','hotelmekka','hotelmadina','kontak','notelp'];
}
