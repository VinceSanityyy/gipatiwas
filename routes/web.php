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



Auth::routes();

Route::get('/', function () {return view('auth.login');});

Route::get('/home', 'HomeController@index')->name('home');

//CALENDAR
Route::get('/calendar', 'CalendarController@index')->name('calendar');

//SALES
Route::get('/transactions', 'TransactionController@index')->name('transactions');

//GUEST
Route::get('/guest', 'GuestController@index')->name('guest');


//PROGRAMS
Route::get('/programs', 'ProgramController@index')->name('programs');

//REPORT
Route::get('/report', 'ReportController@index')->name('report');

//ANCHORS
Route::get('/anchor', 'AnchorController@index')->name('anchor');
Route::post('/anchor', 'AnchorController@store')->name('anchor.store');
Route::patch('/anchor/update/{id}', 'AnchorController@update')->name('anchor.update');
Route::patch('/anchor/inactive/{id}', 'AnchorController@inactive')->name('anchor.inactive');

//APPOINTMENT
Route::get('/appointment', 'AppointmentController@index')->name('appointment');

//INVENTORY
Route::get('/inventory', 'InventoryController@index')->name('inventory');
Route::get('/products', 'ProductsController@index')->name('products');
Route::get('/supplier', 'SupplierController@index')->name('supplier');
Route::get('/customer', 'CustomerController@index')->name('customer');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
