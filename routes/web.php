<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','HomeController@index');
Route::get('/layouts/gallery','HomeController@gallery');
Route::get('/layouts/schedulehaji','HomeController@schedulehaji');
Route::get('daftar','HomeController@daftar');


Route::get('/layouts/login', function () {
    return view('login');
});
Route::get('/admin/inputagenda', function () {
    $waktu=['pagi','siang','sore','malam'];
    $acara=['Keberangkatan Haji','Penjemputan Haji','Keberangkatan Umroh','Penjemputan Umroh'];
    return view('inputagenda',compact('waktu','acara'));
});
Route::get('/homeadmin', function () {
    return view('homeadmin');
});
Route::get('login', function () {
    return view('login');
});
Route::get('showpaket', function () {
    return view('showpaket');
});
Route::get('showblog', function () {
    return view('showblog');
});
Route::get('/adminnindex', function () {
    return view('adminnindex');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/testimoni', function () {
    return view('testimoni');
});
//route buat crud muthowwif
Route::get('/muthowwif', 'MuthowwifController@index');
Route::get('/muthowwif/tambahmuthowwif','MuthowwifController@create');
Route::get('/muthowwif/editmuthowwif/{id_muthowwif}','MuthowwifController@edit');
Route::post('/muthowwif/editmuthowwif/{id_muthowwif}','MuthowwifController@update');
Route::get('/muthowwif/destroy/{id_muthowwif}','MuthowwifController@destroy');
Route::get('/showmuthowwif','penggunaController@muthowwif');
Route::post('/muthowwif/proses', 'MuthowwifController@proses_upload');

//route buat crud adminn
Route::get('/adminn', 'AdminnController@index');
Route::get('/adminn/tambahadminn','AdminnController@tambah');
Route::post('/adminn/store','AdminnController@store');
Route::get('/adminn/editadminn/{id}','AdminnController@edit');
Route::post('/adminn/update','AdminnController@update');
Route::get('/adminn/hapus/{id}','AdminnController@hapus');
//route buat crud muthowwif
Route::get('/users', 'UsersController@index');
Route::get('/users/tambahusers','UsersController@tambah');
Route::post('/users/store','UsersController@store');
Route::get('/users/editusers/{no}','UsersController@edit');
Route::post('/users/update','UsersController@update');
Route::get('/users/hapus/{no}','UsersController@hapus');
//route buat crud paket
Route::get('/paket', 'paketController@index');
Route::get('/paket/tambahpaket','paketController@create');
Route::post('/paket/store','paketController@store');
Route::get('/paket/editpaket/{id}','paketController@edit');
Route::get('/paket/editpakett/{id}','paketController@edit');
Route::post('/paket/update','paketController@update');
Route::get('/paket/destroy/{id}','paketController@destroy');
Route::get('/showpaket/{id}','paketController@show');
//route buat crud manasik
Route::get('/manasik', 'ManasikController@index');
Route::get('/manasik/tambahmanasik','ManasikController@create');
Route::post('/manasik/store','ManasikController@store');
Route::get('/manasik/editmanasik/{id}','ManasikController@edit');
Route::post('/manasik/update','ManasikController@update');
Route::get('/manasik/destroy/{id}','ManasikController@destroy');
Route::get('/showmanasik/{id}','ManasikController@show');

//route buat crud pengguna
Route::get('/pengguna', 'penggunaController@index');
Route::get('/pengguna/tambahpengguna','penggunaController@create');
Route::post('/pengguna/store','penggunaController@store');
Route::get('/pengguna/editpengguna/{id}','penggunaController@edit');
Route::post('/pengguna/update','penggunaController@update');
Route::get('/pengguna/destroy/{id}','penggunaController@destroy');
Route::get('/showpakett','penggunaController@pakett');
Route::get('/showmanasik','penggunaController@manasik');
//login User
Route::get('/home_user', 'loginuserController@index');
Route::get('/loginuser', 'loginuserController@loginuser');
Route::post('/loginPost', 'loginuserController@loginPost');
Route::get('/register', 'loginuserController@register');
Route::post('/registerPost', 'loginuserController@registerPost');
Route::get('/logout', 'loginuserController@logout');
//login admin
Route::get('/homeadmin', 'loginadminController@index');
Route::get('/loginadmin', 'loginadminController@loginadmin');
Route::post('/loginadminPost', 'loginadminController@loginadminPost');
Route::get('/registeradmin', 'loginadminController@registeradmin');
Route::post('/registeradminPost', 'loginadminController@registeradminPost');
Route::get('/logoutadmin', 'loginadminController@logoutadmin');
// Route untuk upload
Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
Route::get('/upload/hapus/{id}', 'UploadController@hapus');