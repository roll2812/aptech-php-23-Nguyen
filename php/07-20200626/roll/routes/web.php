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

Route::get('/demo', function () {
    return view('2');
});

Route::get('/user', function () {
    return "<h1>Hello Users</h1>";
})->name('user');

Route::get('/product', function () {
    return "This is product";
});

Route::get('lapTrinh/{monhoc}', function ($monhoc) {
    return "Day la khoa hoc lap trinh : $monhoc";
});

Route::get('test/{id}/category/{CategoryId}', function ($id, $CategoryId) {
    return "Bai viet so $id . Categody : $CategoryId";
});

Route::get('thongtin/{hoten}/{sdt}', function ($hoten, $sdt) {
    return "Xin chao $hoten , so dien thoai cua ban la : $sdt";    
})->where(['hoten'=>'[a-zA-Z]+','sdt'=>'[0-9]{1-10}']);

Route::get('call-view', function () {
    $hoten = "Nguyen Hoang Nguyen";
    return view('view',compact('hoten'));
});

Route::get('controller','Controller@testAction');

Route::group(['prefix'=>'menu'], function () {
    Route::get('photai', function () {
        return "Day la pho tai";
    });
    Route::get('phonam', function () {
        return "Day la pho nam";
    });
    Route::get('phogau', function () {
        return "Day la pho gau";
    });
});
