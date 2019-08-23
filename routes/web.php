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
/*Route::get('test',function(){
	return view('hello');
}); 
Route::get('test1','testcontroller@index');*/
/*Route::get('h','hellocontroller@index');*/
/*
Route::get('h','contactcontroller@index');
Route::post('/con','contactcontroller@store')->name('contactstore');*/

Route::get('/','inventorycontroller@customer');
Route::post('/insertcustomer','inventorycontroller@insertcustomer');
Route::get('/product','inventorycontroller@showproduct');
Route::get('/purchase','inventorycontroller@showpurchase');
Route::post('/purchasedetails','inventorycontroller@insertpurchase');


Route::post('/productdetails','inventorycontroller@insertproduct');
Route::get('/sales','inventorycontroller@sales');
Route::post('/insertsales','inventorycontroller@insertsales');
Route::get('/delete/{id}','inventorycontroller@delete');
Route::get('/edit/{id}','inventorycontroller@edit');
Route::get('/editcustomer','inventorycontroller@updatecustomer');









/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
/*route::resource('biodata','biodatacontroller');*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
