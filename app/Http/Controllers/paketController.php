<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Paket; 

class paketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paket = DB::table ('paket') -> get(); 
    return view('/admin/paket', ['paket' => $paket]);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('/admin/tambahpaket');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('paket') -> insert([
        'id' => $request ->id,
        'name' => $request ->name,
        'durasi' => $request ->durasi,
        'tanggal' => $request ->tanggal,
        'pesawat' => $request ->pesawat,
        'hotelmekka' => $request ->hotelmekka,
        'hotelmadina' => $request ->hotelmadina,

    ]);
           return redirect('/paket');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paket = paket::all();
        return view('/showpaket',compact('paket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paket = DB::table('paket')->where('id',$id)->get();
        
        return view('/admin/editpaket',['paket' => $paket]);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('paket')->where('id',$request->id)->update([
            'name' => $request ->name,
            'durasi' => $request ->durasi,
            'tanggal' => $request ->tanggal,
            'pesawat' => $request ->pesawat,
            'hotelmekka' => $request ->hotelmekka,
            'hotelmadina' => $request ->hotelmadina,
        ]);
         return redirect('/paket');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           DB::table('paket')->where('id',$id)->delete();
            
        return redirect('/paket');
    }
}
