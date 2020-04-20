<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengguna = DB::table('pengguna')->get();
        return view('/admin/pengguna', ['pengguna'=>$pengguna]);
    }
    public function pakett()
    {
        $paket = DB::table('paket')->get();
        return view('/showpakett', ['paket'=>$paket]);
    }
    public function muthowwif()
    {
        $muthowwif = DB::table('muthowwif')->get();
        return view('/showmuthowwif', ['muthowwif'=>$muthowwif]);
    }    
    public function manasik()
    {
        $manasik = DB::table('manasik')->get();
        return view('/homeuser/showmanasik', ['manasik'=>$manasik]);
    }    
    public function create()
    {
        return view('/admin/tambahpengguna');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('pengguna')->insert([
            'id' => $request->id,
            'email' => $request->email,
            'username'=>$request->username,
            'password'=>$request->password,
            'alamat'=>$request->alamat,
            ]);
            return redirect('/pengguna');
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
        $pengguna = DB::table('pengguna')->where('id',$id)->get();
        // passing data muthowwif yang didapat ke view edit.blade.php
        return view('/admin/editpengguna',['pengguna' => $pengguna]);
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
        DB::table('pengguna')->where('id',$request->id)->update([

            'id' => $request->id,
            'email' => $request->email,
            'username'=>$request->username,
            'password'=>$request->password,
            'alamat'=>$request->alamat,
        ]);
        // alihkan halaman ke halaman muthowwif
        return redirect('/pengguna');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pengguna')->where('id',$id)->delete();
            
        // alihkan halaman ke halaman muthowwif
        return redirect('/pengguna');
    }
}

?>
