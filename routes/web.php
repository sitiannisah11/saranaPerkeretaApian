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

Route::get('/', function () {
    return view('admin.index');
});

Route::get('/identitas', function () { return view('admin.identitas.index');});
Route::get('/add_identitas', function () { return view('admin.identitas.add');});
Route::get('/edit_identitas', function () { return view('admin.identitas.edit');});

Route::get('/sarana', function () { return view('admin.sarana.index');});
Route::get('/add_sarana', function () { return view('admin.sarana.add');});
Route::get('/edit_sarana', function () { return view('admin.sarana.edit');});

Route::get('/sarana', function () { return view('admin.sarana.index');});
Route::get('/add_sarana', function () { return view('admin.sarana.add');});
Route::get('/edit_sarana', function () { return view('admin.sarana.edit');});

Route::get('/galeri', function () { return view('admin.galeri.index');});
Route::get('/add_galeri', function () { return view('admin.galeri.add');});
Route::get('/edit_galeri', function () { return view('admin.galeri.edit');});

Route::get('/klasifikasi', function () { return view('admin.klasifikasi.index');});
Route::get('/add_klasifikasi', function () { return view('admin.klasifikasi.add');});
Route::get('/edit_klasifikasi', function () { return view('admin.klasifikasi.edit');});

Route::get('/kodefikasi', function () { return view('admin.kodefikasi.index');});
Route::get('/add_kodefikasi', function () { return view('admin.kodefikasi.add');});
Route::get('/edit_kodefikasi', function () { return view('admin.kodefikasi.edit');});