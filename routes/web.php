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
Route::get('/admin/loai/danhsachloai','LoaiController@index')->name('admin.loai.index');
Route::get('/admin/loai/taomoiloai','LoaiController@create')->name('admin.loai.create');
Route::post('/admin/loai/luuloai','LoaiController@store')->name('admin.loai.store');
Route::get('/admin/loai/chinhsua{id}','LoaiController@edit')->name('admin.loai.edit');
Route::put('/admin/loai/capnhat{id}','LoaiController@update')->name('admin.loai.update');
Route::delete('/admin/loai/xoa{id}','LoaiController@destroy')->name('admin.loai.delete');
Route::get('/admin/loai/xuatPDF','LoaiController@pdf')->name('admin.loai.pdf');

// Route cho San Pham
Route::get('/admin/sp/danhsachsanpham','SanPhamController@index')->name('admin.sanpham.index');
Route::get('/admin/sp/taomoisanpham','SanPhamController@create')->name('admin.sanpham.create');
Route::post('/admin/sp/luusp','SanPhamController@store')->name('admin.sanpham.store');
Route::get('/admin/sp/chinhsua{id}','SanPhamController@edit')->name('admin.sanpham.edit');
Route::put('/admin/sp/capnhat{id}','SanPhamController@update')->name('admin.sanpham.update');
Route::delete('/admin/sp/xoa{id}','SanPhamController@destroy')->name('admin.sanpham.destroy');
Route::get('/admin/sp/xuatPDF','SanPhamController@pdf')->name('admin.sanpham.pdf');
Route::get('/admin/sp/insp','SanPhamController@print')->name('admin.sanpham.print');

// Route cho frontend
// Route::get('/', 'Frontend\FrontendController@index')->name('frontend.home');
Route::get('/index', 'Frontend\FrontendController@index')->name('frontend.index');
Route::get('/productInfo{id}', 'Frontend\FrontendController@productInfo')->name('frontend.productInfo');
Route::get('/about', 'Frontend\FrontendController@about')->name('frontend.about');
Route::get('/shop', 'Frontend\FrontendController@shop')->name('frontend.shop');
Route::get('/contact', 'Frontend\FrontendController@contact')->name('frontend.contact');


Route::get('/cart', 'Frontend\FrontendController@cart')->name('frontend.cart');
