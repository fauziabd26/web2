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

Route::get('/', function () {
    return view('page');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/inputagenda', function () {
    $waktu=['pagi','siang','sore','malam'];
    $acara=['Keberangkatan','Penjemputan'];
    return view('inputagenda',compact('waktu','acara'));
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/admin/admin', function () {
    return view('admin');
});
Route::get('login', function () {
    return view('login');
});
Route::get('/adminnindex', function () {
    return view('adminnindex');
});
Route::get('/loginuser', function () {
    return view('loginuser');
});
//route buat crud muthowwif
Route::get('/muthowwif', 'MuthowwifController@index');
Route::get('/muthowwif/tambahmuthowwif','MuthowwifController@tambah');
Route::post('/muthowwif/store','MuthowwifController@store');
Route::get('/muthowwif/editmuthowwif/{id}','MuthowwifController@edit');
Route::post('/muthowwif/update','MuthowwifController@update');
Route::get('/muthowwif/hapus/{id}','MuthowwifController@hapus');

//route buat crud adminn
Route::get('/adminn', 'AdminnController@index');
Route::get('/adminn/tambahadminn','AdminnController@tambah');
Route::post('/adminn/store','AdminnController@store');
Route::get('/adminn/editadminn/{no}','AdminnController@edit');
Route::post('/adminn/update','AdminnController@update');
Route::get('/adminn/hapus/{no}','AdminnController@hapus');

//route buat crud scehdule haji
Route::get('/schedulehaji', 'ScheduleHajiController@index');
Route::get('/schedulehaji/tambahschedulehaji','ScheduleHajiController@tambah');
Route::post('/schedulehaji/store','ScheduleHajiController@store');
Route::get('/schedulehaji/editsh/{no}','ScheduleHajiController@edit');
Route::post('/schedulehaji/update','ScheduleHajiController@update');
Route::get('/schedulehaji/destroy/{no}','ScheduleHajiController@destroy');
//route buat crud muthowwif
Route::get('/users', 'UsersController@index');
Route::get('/users/tambahusers','UsersController@tambah');
Route::post('/users/store','UsersController@store');
Route::get('/users/editusers/{no}','UsersController@edit');
Route::post('/users/update','UsersController@update');
Route::get('/users/hapus/{no}','UsersController@hapus');


