<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Manasik;
use App\Muthowwif;
use DB;
class ManasikController extends Controller
{
    public function index()
    {
        $manasik = DB::table('manasik')->join('muthowwif','manasik.id_muthowwif','=','muthowwif.id_muthowwif')->get(); // get()= select * from manasik
        return view ('/admin/manasik',compact('manasik')); 
    }
    public function create()
    {
        $muthowwif = Muthowwif::pluck('id_muthowwif','nama_muthowwif','umur','alamat');
        return view('/admin/tambahmanasik',compact('muthowwif'));

    }
    public function store(Request $request)
    {
        DB::table('manasik')->insert([
            'id' => $request->id,
            'nama_manasik' => $request->nama_manasik,
            'id_muthowwif'=>$request->id_muthowwif,
            'tanggal'=>$request->tanggal,
            'tempat'=>$request->tempat,
            'waktu'=>$request->waktu,
            ]);
        // alihkan halaman ke halaman muthowwif
        return redirect('/manasik');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $manasik = Manasik::findOrFail($id);
        $muthowwif = Muthowwif::pluck('id_muthowwif','nama_muthowwif','umur','alamat');
        return view('/admin/editmanasik',compact('manasik'));    
    }
    public function update(Request $request)
    {
        //
    }
    public function destroy($id)
    {
        $manasik = Manasik::findOrFail($id);
        $manasik->delete();
            
        return redirect('/manasik');    }
}
