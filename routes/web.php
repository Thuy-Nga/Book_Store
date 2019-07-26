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
    return view('welcome');
});

// Route cho backend
// Route cho Loai
Route::get('/admin/danhsachloai','LoaiController@index')->name('admin.loai.index');
Route::get('/admin/taomoiloai','LoaiController@create')->name('admin.loai.create');
Route::post('/admin/luuloai','LoaiController@store')->name('admin.loai.store');
Route::get('/admin/chinhsua{id}','LoaiController@edit')->name('admin.loai.edit');
Route::put('/admin/capnhat{id}','LoaiController@update')->name('admin.loai.update');
Route::delete('/admin/xoa{id}','LoaiController@destroy')->name('admin.loai.delete');
Route::get('/admin/xuatPDF','LoaiController@pdf')->name('admin.loai.pdf');
