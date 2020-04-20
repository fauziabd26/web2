<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Gambar;

class UploadController extends Controller
{
	public function upload(){
		$gambar = Gambar::get();
		return view('upload',['gambar' => $gambar]);
	}

	public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

		Gambar::create([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
		]);

		return redirect()->back();
	}
	public function hapus($id)
	{
		// menghapus data muthowwif berdasarkan id(Primary key) yang dipilih
		DB::table('gambar')->where('id',$id)->delete();
			
		// alihkan halaman ke halaman muthowwif
		return redirect('/upload');
	}
}