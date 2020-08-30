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

Route::get('/','mainController@login');
Route::get('/home','mainController@home');
Route::post('/log','mainController@log');
Route::get('/settings','mainController@settings');


Route::get('/month/{id}','paymentController@month');


Route::get('/payment','PaymentController@payment');
Route::get('/searchpayment',"paymentController@searchpayment");
Route::get('/pay/{id}',"PaymentController@pay");

Route::get('/changeamount','PaymentController@changeamount');
Route::put('/updateamount','PaymentController@updateamount');

Route::get('/changepass','UserController@changepass');
Route::put('/updatepass','UserController@updatepass');

Route::get('/atlete','mainController@atlete');
Route::get('/addatlete','mainController@addatlete');
Route::post('/storea','mainController@storea');
Route::get('/editatlete/{id}',"mainController@editatlete");
Route::put('/updateatlete/{id}',"mainController@updateatlete"); 
Route::get('/deleteatlete/{id}',"mainController@deleteatlete");
Route::get('/searchatlete',"mainController@searchatlete");
Route::get('/searchhome',"mainController@searchhome");


Route::get('/addemployee','EmployeeController@addemployee');
Route::get('/employee','EmployeeController@employee');
Route::post('/storee','EmployeeController@storee');
Route::get('/editemployee/{id}',"EmployeeController@editemployee");
Route::put('/updateemployee/{id}',"EmployeeController@updateemployee"); 
Route::get('/deleteemployee/{id}',"EmployeeController@deleteemployee");
Route::get('/searchemployee',"EmployeeController@searchemployee");