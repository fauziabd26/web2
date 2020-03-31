<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

	class Muthowwif extends Model
	{
    
		protected $table="muthowwif";
		protected $primaryKey="no";
		protected $fillable=['no','id','name','umur','alamat'];
	}
?>