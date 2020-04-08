<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScheduleHajiController extends Controller
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
    return view('/admin/schedulehaji', ['schedulehaji' => $schedulehaji]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // memanggil view create
    return view('/admin/tambahschedulehaji');
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
        'id' => $request ->id,
        'nama_acara' => $request ->nama_acara,
        'tempat' => $request ->tempat,
        'tanggal' => $request ->tanggal,
        'waktu' => $request ->waktu,
    ]);
    // alihkan halaman tambah Schedule haji ke halaman schedulehaji
    return redirect('/admin/schedulehaji');
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
    public function edit($id)
    {
        
        $schedulehaji = DB::table('schedulehaji')->where('id',$id)->get();
        
        return view('/admin/editsh',['schedulehaji' => $schedulehaji]);
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
        DB::table('schedulehaji')->where('id',$request->id)->update([
        'id' => $request->id,
        'nama_acara' => $request->nama_acara,
        'tempat' => $request ->tempat,
        'tanggal' => $request ->tanggal,
        'waktu' => $request ->waktu,
            
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/admin/schedulehaji');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('schedulehaji')->where('id',$id)->delete();
            
        return redirect('/schedulehaji');
    }
}
