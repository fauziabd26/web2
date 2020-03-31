<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class schedulehajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari table schedulehaji
        $schedulehaji = DB::table ('schedulehaji') -> get(); // get()= select * from schedulehaji
    // mengirim data schedulehaji ke view schedulehaji
    return view('schedulehaji', ['schedulehaji' => $schedulehaji]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        // memanggil view create
    return view('tambahschedulehaji');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    // insert data ke table schedulehaji
    DB::table('schedulehaji') -> insert([
        'no'  => $request ->no,
        'id' => $request ->id,
        'nama_acara' => $request ->nama_acara,
        'tanggal' => $request ->tanggal,
        'tempat' => $request ->tempat,
        'waktu' => $request ->waktu,
    ]);
    // alihkan halaman tambah Schedule haji ke halaman schedulehaji
    return redirect('/schedulehaji');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($no)
    {
        
		$schedulehaji = DB::table('schedulehaji')->where('no',$no)->get();
		
		return view('editsh',['schedulehaji' => $schedulehaji]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('schedulehaji')->where('no',$request->no)->update([
			'id' => $request->id,
            'nama_acara' => $request->nama_acara,
            'tanggal' => $request ->tanggal,
            'tempat' => $request ->tempat,
            'waktu' => $request ->waktu,
            
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/schedulehaji');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($no)
    {
        DB::table('schedulehaji')->where('no',$no)->delete();
			
		return redirect('/schedulehaji');
    }
}
