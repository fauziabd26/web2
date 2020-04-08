<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MuthowwifController extends Controller
{
    public function index()
    {
    	// mengambil data dari table muthowwif
    	$muthowwif = DB::table('muthowwif')->get();

    	// mengirim data pegawai ke view muthowwif
    	return view('/admin/muthowwif', ['muthowwif'=>$muthowwif]);
    }

		// method untuk menampilkan view form tambah muthowwif
	public function tambah()
	{

		// memanggil view tambah
		return view('/admin/tambahmuthowwif');

	}
	
		// method untuk insert data ke table muthowwif
	public function store(Request $request)
	{
		// insert data ke table muthowwif
		DB::table('muthowwif')->insert([
		
			'id' => $request->id,
			'name' => $request->name,
			'umur'=>$request->umur,
			'alamat'=>$request->alamat,
			]);
		// alihkan halaman ke halaman muthowwif
		return redirect('/muthowwif');

	}
		// method untuk edit data muthowwif
	public function edit($no)
	{
		// mengambil data muthowwif berdasarkan no(primary key) yang dipilih
		$muthowwif = DB::table('muthowwif')->where('no',$no)->get();
		// passing data muthowwif yang didapat ke view edit.blade.php
		return view('editmuthowwif',['muthowwif' => $muthowwif]);

	}

		// update data muthowwif
	public function update(Request $request)
	{
		// update data muthowwif
		DB::table('muthowwif')->where('no',$request->no)->update([
			'id' => $request->id,
			'name' => $request->name,
			'umur'=>$request->umur,
			'alamat'=>$request->alamat,
		]);
		// alihkan halaman ke halaman muthowwif
		return redirect('/muthowwif');
	}

		// method untuk hapus data muthowwif
	public function hapus($no)
	{
		// menghapus data muthowwif berdasarkan no(Primary key) yang dipilih
		DB::table('muthowwif')->where('no',$no)->delete();
			
		// alihkan halaman ke halaman muthowwif
		return redirect('/muthowwif');
	}
}

?>