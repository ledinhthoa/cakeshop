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
    'uses'=>'pageController@getIndex'
]);
route::get('loai-san-pham/{type}',[
    'as'=>'loaisanpham',
    'uses'=>'pageController@getLoaisp'
]);
route::get('chi-tiet-san-pham/{id}',[
    'as'=>'chitietsanpham',
    'uses'=>'pageController@getChitiet'
]);
route::get('lien-he',[
    'as'=>'lienhe',
    'uses'=>'pageController@getLienhe'
]);
route::get('gioi-thieu',[
    'as'=>'gioithieu',
    'uses'=>'pageController@getGioithieu'
]);
Route::get('add-to-cart/{id}',[
    'as'=>'themgiohang',
    'uses'=>'PageController@getAddtoCart'
]);
Route::get('del-cart/{id}',[
    'as'=>'xoagiohang',
    'uses'=>'PageController@getDelItemCart'
]);
Route::get('dat-hang',[
    'as'=>'dathang',
    'uses'=>'PageController@getCheckout'
]);

Route::post('dat-hang',[
    'as'=>'dathang',
    'uses'=>'PageController@postCheckout'
]);

Route::get('dang-nhap',[
    'as'=>'login',
    'uses'=>'PageController@getLogin'
]);
Route::post('dang-nhap',[
    'as'=>'login',
    'uses'=>'PageController@postLogin'
]);
Route::get('dang-ki',[
    'as'=>'signin',
    'uses'=>'PageController@getSignin'
]);
Route::post('dang-ki',[
    'as'=>'signin',
    'uses'=>'PageController@postSignin'
]);
Route::get('dang-xuat',[
    'as'=>'logout',
    'uses'=>'PageController@postLogout'
]);
Route::get('search',[
    'as'=>'search',
    'uses'=>'PageController@getsearch'
]);





Route::group(['prefix' => 'quanli'], function () {
    Route::get('/','QuanliController@index')->name('quanli.index');
    Route::get('/{id}/delete','QuanliController@destroy')->name('quanli.destroy');
    Route::get('/{id}/edit','QuanliController@edit')->name('quanli.edit');
    Route::post('/{id}/edit','QuanliController@update')->name('quanli.update');

});

Route::get('login/{provider}',[
    'as'=>'provider_login',
    'uses'=>'PageController@redirectToProvider'
]);
Route::get('login/{provider}/callback',[
    'as'=>'provider_login_callback',
    'uses'=>'PageController@handleProviderCallback'
]);
