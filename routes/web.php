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
Route::get('/tentang', function(){
	return view('home.tentang');
});
Route::get('/layanan', function(){
	return view('home.layanan');
});

Route::get('/', 'HomeController@index');
Route::get('/{id}/pesan', 'HomeController@pesan');
Route::post('/pesan/create', 'HomeController@create');

// Akses
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');
// Akhir Akses

Route::group(['middleware' => ['auth','checkRole:admin']], function(){
Route::get('/dashboard', 'DashboardController@index');
// CRUD
Route::get('/pelanggan', 'PelangganController@index');
Route::get('/pelanggan/{id}/edit', 'PelangganController@edit');
Route::post('/pelanggan/{id}/update', 'PelangganController@update');
Route::get('/pelanggan/{id}/delete', 'PelangganController@delete');
Route::get('/pelanggan/{id}/detail', 'PelangganController@detail');
Route::get('laporan-pelanggan','PelangganController@pelangganPDF');

// CRUD User
Route::get('/user', 'UserController@index');
Route::post('/user/create', 'UserController@create');
Route::get('/user/{id}/edit', 'UserController@edit');
Route::post('/user/{id}/update', 'UserController@update');
Route::get('/user/{id}/delete', 'UserController@delete');

// CRUD Kategori
Route::get('/kategori', 'KategoriController@index');
Route::post('/kategori/create', 'KategoriController@create');
Route::get('/kategori/{id}/edit', 'KategoriController@edit');
Route::post('/kategori/{id}/update', 'KategoriController@update');
Route::get('/kategori/{id}/delete', 'KategoriController@delete');

//Pengerjaan
Route::get('/pengerjaan/pending', 'PengerjaanController@pending');
Route::get('/pengerjaan/proses', 'PengerjaanController@proses');
Route::get('/pengerjaan/selesai', 'PengerjaanController@selesai');
Route::get('pengerjaan/{id}/pending', 'PengerjaanController@MasukPending');
Route::get('pengerjaan/{id}/proses', 'PengerjaanController@MasukProses');
Route::get('pengerjaan/{id}/selesai', 'PengerjaanController@MasukSelesai');
Route::get('pengerjaan/{id}/delete', 'PengerjaanController@delete');

Route::get('laporan-pdf','PengerjaanController@generatePDF');
});

