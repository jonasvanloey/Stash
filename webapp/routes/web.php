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
Route::get('/add-barcode','barcodeController@index');
Route::get('/delivered','barcodeController@delivered');
Route::post('/add-barcode/add','barcodeController@add');


Auth::routes();

Route::get('/home', 'barcodeController@overview')->name('home');
