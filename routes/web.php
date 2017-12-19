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
Route::get('index',[
	'as'=>'trang-chu',
	'uses'=>'PagerController@getIndex'
]);
Route::get('loai-san-pham/{type}',[
	'as'=>'loaisanpham',
	'uses'=>'PagerController@getLoaiSp'
]);
Route::get('chi-tiet-san-pham/{type}',[
	'as'=>'chitietsanpham',
	'uses'=>'PagerController@getChiTietSanPham'
]);
Route::get('gioi-thieu',[
	'as'=>'gioi-thieu',
	'uses'=>'PagerController@getGioiThieu'
]);
Route::get('lien-he',[
	'as'=>'lien-he',
	'uses'=>'PagerController@getLienHe'
]);
