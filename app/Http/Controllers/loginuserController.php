<?php

namespace App\Http\Controllers;

use App\Pengguna;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class loginuserController extends Controller
{
    public function index()
    {
        if(!Session::get('loginuser')){
            return redirect('loginuser')->with('Alert','You must Login');
        } else {
            return view('/home_user');
        }
        
    }

    public function loginuser(){
        return view ('/loginuser');
    }

    public function loginPost(Request $request){
        $email = $request->email;
        $password = $request->password;

        $data=pengguna::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('id',$data->id);
                Session::put('email',$data->email);
                Session::put('username',$data->username);
                Session::put('password',$data->password);

                Session::put('alamat',$data->alamat);
                Session::put('loginuser',TRUE);
                return redirect('home_user');
            }
            else {
                return redirect('loginuser')->with('alert', 'login yang bener woy !');
            }
        } else {
            return redirect('loginuser')->with('alert', 'Your Password Incorrect !');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('loginuser')->with ('alert', 'Your Was Logout');
    }

    public function register(Request $request){
        $id= $request->input('id');
        $email= $request->input('email');
        $username= $request->input('username');
        $password= $request->input('password');
        $alamat= $request->input('alamat');
        return view('register');
    }
    public function registerPost(Request $request){
        $this->validate($request, [
            'id'=>'required|min:1',
            'email' => 'required|min:4|email|unique:pengguna',
            'username' => 'required|min:4',
            'password' => 'required|min:4',

            'alamat'=> 'required',
        ]);

        $data =  new pengguna();
        $data->id = $request->id;
        $data->email = $request->email;
        $data->username = $request->username;
        $data->password = bcrypt($request->password);

        $data->alamat = $request->alamat;
        $data->save();
        return redirect('loginuser')->with('alert-success','Kamu berhasil Register');
    }
}