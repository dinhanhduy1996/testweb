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

Route::group(['middleware'=>'userlogin'],function(){
    Route::get('/', 'App\Http\Controllers\MonHocController@getDanhSach')->name('trangchu');
    Route::get('phanmon')->name('phanmon');
    Route::get('phanmon/{tenphanmon}.{id}','App\Http\Controllers\PhanMonController@getDanhSach');
    Route::get('{baihoc}.{id}','App\Http\Controllers\BaiHocController@getDanhSach');
    Route::get('dangxuat', 'App\Http\Controllers\UserController@dangXuat')->name('dangxuat');
    Route::get('sign-up', 'App\Http\Controllers\UserController@getDangKy')->name('dangky');
    Route::post('sign-up', 'App\Http\Controllers\UserController@postDangKy');
    Route::get('chat','App\Http\Controllers\ChattingController@getNoiDung');
    Route::get('senddata', function(){return view('sendata');});
});

Route::get('login','App\Http\Controllers\UserController@getDangNhap')->name('dangnhap');
Route::post('login','App\Http\Controllers\UserController@postDangNhap');
Route::get('nhandata','App\Http\Controllers\ajax@sendData');
Route::get('laydata','App\Http\Controllers\ajax@getData');
Route::get('dotienganh1','App\Http\Controllers\TuVungController@getData1');
Route::get('dotienganh2','App\Http\Controllers\TuVungController@getData2');
Route::get('dotienganh3','App\Http\Controllers\TuVungController@getData3');
Route::get('bangcuuchuong', function(){return view('bangcuuchuong');});


    

