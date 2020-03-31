<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminnController extends Controller
{
    public function index()
    {
    	// mengambil data dari table muthowwif
    	$adminn = DB::table('adminn')->get();

    	// mengirim data pegawai ke view muthowwif
    	return view('adminn', ['adminn'=>$adminn]);
    }

		// method untuk menampilkan view form tambah muthowwif
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahadminn');

	}
		// method untuk insert data ke table muthowwif
	public function store(Request $request)
	{
		// insert data ke table muthowwif
		DB::table('adminn')->insert([
			'no' => $request->no,
			'id' => $request->id,
			'nama' => $request->nama,
			'username'=>$request->username,
			'password'=>$request->password,
			]);
		// alihkan halaman ke halaman muthowwif
		return redirect('/adminn');

	}
		// method untuk edit data muthowwif
	public function edit($no)
	{
		// mengambil data muthowwif berdasarkan no(primary key) yang dipilih
		$adminn = DB::table('adminn')->where('no',$no)->get();
		// passing data muthowwif yang didapat ke view edit.blade.php
		return view('editadminn',['adminn' => $adminn]);

	}

		// update data muthowwif
	public function update(Request $request)
	{
		// update data muthowwif
		DB::table('adminn')->where('no',$request->no)->update([
			'no' => $request->no,
			'id' => $request->id,
			'nama' => $request->nama,
			'username'=>$request->username,
			'password'=>$request->password,
		]);
		// alihkan halaman ke halaman muthowwif
		return redirect('/adminn');
	}

		// method untuk hapus data muthowwif
	public function hapus($no)
	{
		// menghapus data muthowwif berdasarkan no(Primary key) yang dipilih
		DB::table('adminn')->where('no',$no)->delete();
			
		// alihkan halaman ke halaman muthowwif
		return redirect('/adminn');
	}
}

?>