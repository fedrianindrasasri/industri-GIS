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

Route::get('/', [
    'as' => 'dashboard', 
    'uses' => 'dashboard@index'
]);

Route::get('/daftar-industri', [
    'as' => 'daftar-industri', 
    'uses' => 'daftarIndustri@index'
]);

Route::get('/daftar-industri/tambah',[
    'as'=> 'daftar-industri/tambah', 
    'uses' => 'daftarIndustri@tambah_industri'
]);

Route::post('/daftar-industri/tambah/store',[
    'as'=> 'daftar-industri/tambah/store', 
    'uses' => 'daftarIndustri@store'
]);

Route::get('/daftar-industri/edit/{No}', 'daftarIndustri@edit');
Route::put('/daftar-industri/update/{No}', 'daftarIndustri@update');

Route::get('/daftar-industri/destroy/{No}', 'daftarIndustri@destroy');