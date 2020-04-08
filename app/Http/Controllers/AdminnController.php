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
    	return view('/admin/adminn', ['adminn'=>$adminn]);
    }

		// method untuk menampilkan view form tambah muthowwif
	public function tambah()
	{

		// memanggil view tambah
		return view('/admin/tambahadminn');

	}
		// method untuk insert data ke table muthowwif
	public function store(Request $request)
	{
		// insert data ke table muthowwif
		DB::table('adminn')->insert([
			'id' => $request->id,
			'name' => $request->name,
			'username'=>$request->username,
			'password'=>$request->password,
			]);
		// alihkan halaman ke halaman muthowwif
		return redirect('/adminn');

	}
		// method untuk edit data muthowwif
	public function edit($id)
	{
		// mengambil data muthowwif berdasarkan id(primary key) yang dipilih
		$adminn = DB::table('adminn')->where('id',$id)->get();
		// passing data muthowwif yang didapat ke view edit.blade.php
		return view('editadminn',['adminn' => $adminn]);

	}

		// update data muthowwif
	public function update(Request $request)
	{
		// update data muthowwif
		DB::table('adminn')->where('id',$request->id)->update([
			'id' => $request->id,
			'name' => $request->name,
			'username'=>$request->username,
			'password'=>$request->password,
		]);
		// alihkan halaman ke halaman muthowwif
		return redirect('/admin/adminn');
	}

		// method untuk hapus data muthowwif
	public function hapus($id)
	{
		// menghapus data muthowwif berdasarkan id(Primary key) yang dipilih
		DB::table('adminn')->where('id',$id)->delete();
			
		// alihkan halaman ke halaman muthowwif
		return redirect('/admin/adminn');
	}
}

?>