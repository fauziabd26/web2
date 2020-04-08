<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUser;
use Hash;
use Session;

class loginuserController extends Controller
{
    public function index()
    {
        if(!Session::get('login')){
            return redirect('/')->with('Alert','You must Login');
        } else {
            return view('/home');
        }
        
    }

    public function loginuser(){
        return view ('/');
    }

    public function loginuserPost(Request $request){
        $email=$request->email;
        $password=$request->password;

        $data=ModelUser::where('email',$email)->first();
        if($data){
            if(Hash::check($password,$data->$password)){
                Session::put('username',$data->username);
                Session::put('password',$data->password);
                Session::put('id',$data->id);
                Session::put('email',$data->email);
                Session::put('alamat',$data->alamat);
                Session::put('no_Telp',$data->no_Telp);
                Session::put('login',TRUE);
                return redirect('/home');
            }
            else {
                return redirect('/')->with('alert', 'Your Password Incorrect !');
            }
        } else {
            return redirect('/')->with('alert', 'Your Password Incorrect !');
        }
    }

    public function logoutuser(){
        Session::flush();
        return redirect('/')->with ('alert', 'Your Was Logout');
    }


}
