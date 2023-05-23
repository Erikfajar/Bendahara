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
    return view('welcome');
});

Route::get('/beranda','BerandaController@beranda')->name('beranda');
Route::post('/postlogin','LoginController@postlogin')->name('postlogin');
Route::get('/logout','LoginController@logout')->name('logout');

//tingkat1
Route::get('/tingkat-satu','SiswaController@index')->name('tingkat-satu');
Route::get('/create-satu','SiswaController@create')->name('create-satu');
Route::post('/simpan-satu','SiswaController@store')->name('simpan-satu');
Route::get('/edit-satu/{id}','SiswaController@edit')->name('edit-satu');
// Route::get('/edit-history/{id}','SiswaController@history')->name('edit-history');
Route::post('/update-satu/{id}','SiswaController@update')->name('update-satu');
// Route::post('/update-history/{id}','SiswaController@updateHistory')->name('update-history');
Route::get('/delete-satu/{id}','SiswaController@destroy')->name('delete-satu');
Route::get('/cetak-siswa','SiswaController@cetakSiswa')->name('cetak-siswa');

//tingkat2
Route::get('/tingkat-dua','SiswaController@indexx')->name('tingkat-dua');
Route::get('/create-dua','SiswaController@createe')->name('create-dua');
Route::post('/simpan-dua','SiswaController@storee')->name('simpan-dua');
Route::get('/edit-dua/{id}','SiswaController@editt')->name('edit-dua');
Route::post('/update-dua/{id}','SiswaController@updatee')->name('update-dua');
Route::get('/delete-dua/{id}','SiswaController@destroyy')->name('delete-dua');

//tingkat3
Route::get('/tingkat-tiga','SiswaController@indexxx')->name('tingkat-tiga');
Route::get('/create-tiga','SiswaController@createee')->name('create-tiga');
Route::post('/simpan-tiga','SiswaController@storeee')->name('simpan-tiga');
Route::get('/edit-tiga/{id}','SiswaController@edittt')->name('edit-tiga');
Route::post('/update-tiga/{id}','SiswaController@updateee')->name('update-tiga');
Route::get('/delete-tiga/{id}','SiswaController@destroyyy')->name('delete-tiga');

//pemasukan
Route::get('/pemasukan','SiswaController@pemasukan')->name('pemasukan');
Route::get('/cetak-pemasukan','SiswaController@cetakPemasukan')->name('cetak-pemasukan');
Route::get('/create-pemasukan','SiswaController@crtpemasukan')->name('create-pemasukan');
Route::post('/simpan-pemasukan','SiswaController@pemasukann')->name('simpan-pemasukan');
Route::get('/delete-pemasukan/{id}','SiswaController@deletePemasukan')->name('delete-pemasukan');
Route::post('/update-pemasukan/{id}','SiswaController@updatePemasukan')->name('update-pemasukan');
Route::get('/edit-pemasukan/{id}','SiswaController@editPemasukan')->name('edit-pemasukan');

//cetak-data-pertanggal
Route::get('/cetak-data-pemasukan-form','SiswaController@cetakForm')->name('cetak-data-pemasukan-form');
Route::get('/cetak-data-pertanggal/{tglawal}/{tglakhir}','SiswaController@cetakPemasukanPertanggal')->name('cetak-data-pertanggal');


