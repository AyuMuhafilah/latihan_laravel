<?php

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
/*
Rout digunakan untuk :
1.  Mengakses View
2.  Menampilkan detail pegawai yang memiliki satu parameter yaitu nik
*/

// Route Untuk Kelola Pegawai
Route::get('/', 'UserController@LoginPage');
Route::get('/TampilPegawai', 'PegawaiController@TampilData');
Route::get('/TambahData', 'PegawaiController@TambahData');
Route::post('/SimpanData', 'PegawaiController@SimpanData');
Route::get('/HapusData/{nik}','PegawaiController@HapusData');
Route::get('/EditData/{nik}','PegawaiController@EditData');
Route::post('/UpdateData','PegawaiController@UpdateData');
Route::get('/CariPegawai','PegawaiController@CariPegawai');
Route::post('/CekLogin','UserController@CekLoginUser');
Route::get('/GagalLogin','UserController@InfoGagalLogin');
Route::get('/Logout','UserController@UserLogout');
Route::get('/BuatAdmin','UserController@BuatUserAdmin');




