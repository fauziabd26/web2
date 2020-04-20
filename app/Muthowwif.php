<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

	class Muthowwif extends Model
	{
    
		protected $table	  ="muthowwif";
		protected $primaryKey ="id_muthowwif";
		protected $fillable	  =[
			'id_muthowwif','file','nama_muthowwif','umur','alamat'
		];
		public $timestamps = false;
		
	}
?>