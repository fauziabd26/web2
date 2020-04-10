<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class loginadminController extends Controller
{
    public function index()
    {
        if(!Session::get('loginadmin')){
            return redirect('loginadmin')->with('Alert','You must Login');
        } else {
            return view('/homeadmin');
        }
        
    }

    public function loginadmin(){
        return view ('/loginadmin');
    }

    public function loginadminPost(Request $request){
        $username = $request->username;
        $password = $request->password;

        $data=admin::where('username',$username)->first();
        if($data){ //apakah username tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('id',$data->id);
                Session::put('name',$data->name);
                Session::put('username',$data->username);
                Session::put('password',$data->password);

                Session::put('loginadmin',TRUE);
                return redirect('homeadmin');
            }
            else {
                return redirect('loginadmin')->with('alert', 'login yang bener woy !');
            }
        } else {
            return redirect('loginadmin')->with('alert', 'Your Password Incorrect !');
        }
    }

    public function logoutadmin(){
        Session::flush();
        return redirect('loginadmin')->with ('alert', 'Your Was Logout');
    }

    public function registeradmin(Request $request){
        $id= $request->input('id');
        $name= $request->input('name');
        $username= $request->input('username');
        $password= $request->input('password');
        return view('registeradmin');
    }
    public function registeradminPost(Request $request){
        $this->validate($request, [
            'id'=>'required|min:1',
            'name' => 'required|min:4|unique:admin',
            'username' => 'required|min:4',
            'password' => 'required|min:4',

        ]);

        $data =  new admin();
        $data->id = $request->id;
        $data->name = $request->name;
        $data->username = $request->username;
        $data->password = bcrypt($request->password);

        $data->save();
        return redirect('loginadmin')->with('alert-success','Kamu berhasil Register');
    }
}