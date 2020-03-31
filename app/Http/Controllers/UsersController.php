<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = DB::table('users')->get();

        // mengirim data pegawai ke view muthowwif
        return view('users', ['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        //
        return view('tambahusers');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        DB::table('users')->insert([
            'no' => $request->no,
            'id' => $request->id,
            'name' => $request->name,
            'username'=>$request->username,
            'password'=>$request->password,
            'asal'=>$request->asal,
            ]);
        // alihkan halaman ke halaman muthowwif
        return redirect('/users');
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
        //
        $users = DB::table('users')->where('no',$no)->get();
        return view('editusers',['users' => $users]);
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
        //
        DB::table('users')->where('no',$request->no)->update([
            'no' => $request->no,
            'id' => $request->id,
            'name' => $request->name,
            'username'=>$request->username,
            'password'=>$request->password,
            'asal'=>$request->asal,
        ]);
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        //
        DB::table('users')->where('no',$no)->delete();
            
        return redirect('/users');
    }
}
