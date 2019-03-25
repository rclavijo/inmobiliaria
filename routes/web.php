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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*rutas root*/
Route::group(['middleware'=>['auth','is_admin']], function()
{

Route::get('root', 'RootController@index')->name('rootini');
Route::get('root/create', 'RootController@Createadm')->name('rootcreateadm');
}
);

/*rutas admin*/
Route::group(['middleware'=>['auth','is_admin']], function()
{

Route::get('admin', 'AdminController@index')->name('admini');
Route::get('admin/all/properties', 'AdminController@properties')->name('admprop');
Route::get('admin/profile','AdminController@profile')->name('adminprof');
}
);

/*rutas vendedor*/

Route::group(['middleware'=>['auth','is_seller']], function()
{
Route::get('seller/properties', 'SellerController@index')->name('prop');
Route::get('seller', 'SellerController@profile')->name('sellerprof');
Route::post('seller', 'PersonController@updatename')->name('updatenamep');
Route::get('properties', 'SellerController@properties')->name('sellerprop');
Route::get('seller/upload/apartment', 'SellerController@napartment')->name('sellernapart');
Route::get('seller/upload/cellar', 'SellerController@ncellar')->name('sellerncellar');
Route::get('seller/upload/house', 'SellerController@nhouse')->name('sellernhouse');
Route::get('seller/upload/batch', 'SellerController@nbatch')->name('sellernbatch');
Route::get('seller/upload/farm', 'SellerController@nfarm')->name('sellernfarm');
}

);


