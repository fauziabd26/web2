<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manasik extends Model
{
    protected $table	 ="manasik";
	protected $primaryKey="id";
	protected $fillable	 =[
		'id','nama_manasik','id_muthowwif','tanggal','tempat','waktu'
	];
	
	public $incrementing = false;
	public $timestamps = false;
	
	public function muthowwif(){
        return $this->belongsTo('App\Muthowwif', 'id_muthowwif');
    }
}

