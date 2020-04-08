<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('layouts.page');
    }
    public function gallery(){
        return view('layouts.gallery');
    }
    public function schedulehaji(){
        return view('layouts.schedulehaji');
    }
}
