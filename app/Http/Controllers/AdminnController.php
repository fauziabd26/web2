<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminnController extends Controller
{
    public function index()
    {
    	// mengambil data dari table muthowwif
    	$admin = DB::table('admin')->get();

    	// mengirim data pegawai ke view muthowwif
    	return view('/admin/adminn', ['adminn'=>$admin]);
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
		DB::table('admin')->insert([
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
		$admin = DB::table('admin')->where('id',$id)->get();
		// passing data muthowwif yang didapat ke view edit.blade.php
		return view('/admin/editadminn',['adminn' => $admin]);

	}

		// update data muthowwif
	public function update(Request $request)
	{
		// update data muthowwif
		DB::table('admin')->where('id',$request->id)->update([
			'id' => $request->id,
			'name' => $request->name,
			'username'=>$request->username,
			'password'=>$request->password,
		]);
		// alihkan halaman ke halaman muthowwif
		return redirect('/adminn');
	}

		// method untuk hapus data muthowwif
	public function hapus($id)
	{
		// menghapus data muthowwif berdasarkan id(Primary key) yang dipilih
		DB::table('admin')->where('id',$id)->delete();
			
		// alihkan halaman ke halaman muthowwif
		return redirect('/adminn');
	}
}

?>