<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Muthowwif;

class MuthowwifController extends Controller
{
    public function index()
    {
    	$muthowwif = Muthowwif::all();
    	return view ('/admin/muthowwif',compact('muthowwif'));
    }
	public function create()
	{
		return view('/admin/tambahmuthowwif');
	}
	/*public function store(Request $request)
	{
		Muthowwif::create($request->all());
		return redirect('/muthowwif');
	}*/
	public function show($id_muthowwif)
    {
        $muthowwif = Muthowwif::all();
        return view('/showmuthowwif',compact('muthowwif'));
    }
	public function edit($id_muthowwif)
	{
		$muthowwif = Muthowwif::findOrFail($id_muthowwif);
		return view('/admin/editmuthowwif',compact('muthowwif'));
	}
	public function update(Request $request, $id_muthowwif)
    {
        $update = Muthowwif::where('id_muthowwif', $id_muthowwif)->first();
        $update->id_muthowwif = $request['id_muthowwif'];
        $update->nama_muthowwif = $request['nama_muthowwif'];
        $update->umur = $request['umur'];
        $update->alamat = $request['alamat'];

        if($request->file('file') == "")
        {
            $update->file = $update->file;
        } 
        else
        {
            $file       = $request->file('file');
            $nama_file   = $file->getClientOriginalName();
            $request->file('file')->move($tujuan_upload,$nama_file);
            $update->gambar = $fileName;
        }
        
        $update->update();
        return redirect('/muthowwif');
    }
	/*public function update(Request $request)
	{
		DB::table('muthowwif')->where('id_muthowwif',$request->id_muthowwif)->update([
			'id_muthowwif' => $request->id_muthowwif,
			'file' => $request->file,
			'nama_muthowwif'=>$request->nama_muthowwif,
			'umur'=>$request->umur,
			'alamat'=>$request->alamat,
		]);
		$muthowwif = Muthowwif::findOrFail($id_muthowwif);
        $muthowwif->update($request->all());
        return redirect('/muthowwif');	
	}*/
	public function proses_upload(Request $request){
		$this->validate($request, [
			'id_muthowwif' => 'required',
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'nama_muthowwif' => 'required',
			'umur' => 'required',
			'alamat' => 'required',
		]);
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'gambar_muthowwif';
		$file->move($tujuan_upload,$nama_file);

		Muthowwif::create([
			'id_muthowwif' => $request->id_muthowwif,
			'file' => $nama_file,
			'nama_muthowwif' => $request->nama_muthowwif,
			'umur' => $request->umur,
			'alamat' => $request->alamat,
		]);

		return redirect('/muthowwif');
	}
	public function destroy($id_muthowwif)
	{
		DB::table('muthowwif')->where('id_muthowwif',$id_muthowwif)->delete();
		return redirect('/muthowwif');
	}
}

?>