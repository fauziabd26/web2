<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class scheduleumrohController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scheduleumroh = DB::table ('scheduleumroh') -> get(); // get()= select * from scheduleumroh
    return view ('scheduleumroh', ['scheduleumroh' => $scheduleumroh]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createumroh');
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
    DB::table('scheduleumroh') -> insert([
        'id' => $request ->id,
        'nama_acara' => $request ->nama_acara,
        'tempat' => $request ->tempat,
        'tanggal' => $request ->tanggal,
        'waktu' => $request ->waktu,
    ]);
    // alihkan halaman tambah Schedule haji ke halaman schedulehaji
    return redirect('/scheduleumroh');
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
        $scheduleumroh = DB::table('scheduleumroh')->where('no',$no)->get();
		
		return view('editsu',['scheduleumroh' => $scheduleumroh]);
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
        DB::table('scheduleumroh')->where('no',$request->no)->update([
			'id' => $request->id,
            'nama_acara' => $request->nama_acara,
            'tempat' => $request ->tempat,
        'tanggal' => $request ->tanggal,
        'waktu' => $request ->waktu,
            
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/scheduleumroh');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($no)
    {
        $scheduleumroh = DB::table('scheduleumroh')->where('no',$no)->get();
		
		return view('hapus',['scheduleumroh' => $scheduleumroh]);
    }
}
