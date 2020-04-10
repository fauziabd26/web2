<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class manasikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $manasik = DB::table ('manasik') -> get(); // get()= select * from manasik
    return view ('/admin/manasik', ['manasik' => $manasik]);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('/admin/tambahmanasik');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         DB::table('manasik') -> insert([
        'id' => $request ->id,
        'nama_manasik' => $request ->nama_manasik,
        'tempat' => $request ->tempat,
        'tanggal' => $request ->tanggal,
        'waktu' => $request ->waktu,
    ]);
    return redirect('/manasik');
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
        $manasik = DB::table('manasik')->where('id',$id)->get();
        
        return view('/admin/editmanasik',['manasik' => $manasik]);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('manasik')->where('id',$request->id)->update([
            'id' => $request->id,
            'nama_manasik' => $request->nama_manasik,
            'tempat' => $request ->tempat,
            'tanggal' => $request ->tanggal,
            'waktu' => $request ->waktu,
            
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/manasik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                DB::table('manasik')->where('id',$id)->delete();
            
        return redirect('/manasik');    }
}
