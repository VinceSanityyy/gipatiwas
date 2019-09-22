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
Route::post('/programs', 'ProgramController@store')->name('programs.store');

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


// Route::get('/products', 'ProductsController@index')->name('products');
// Route::get('/supplier', 'SupplierController@index')->name('supplier');
Route::get('/customer', 'CustomerController@index')->name('customer');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');








//KRISTINE JEEG PORTAL CUSTOM ROUTES

//Suppliers
Route::resource('supplier', 'SupplierController');
//products
Route::resource('product', 'ProductsController');

//damaged
Route::resource('damage', 'DamageController');


//history
Route::get('history', 'HistoryController@getHistory')->name('history');


//custom routes
Route::get('/products', 'ProductsController@getProducts')->name('products');
Route::get('/suppliers', 'SupplierController@getSuppliers')->name('suppliers');
Route::get('/damages', 'DamageController@getDamages')->name('damages');

//addQty
Route::put('/addStocks/{id}', 'ProductsController@stockIn');
//add to damaged products
Route::put('/addDamage/{id}', 'ProductsController@addtoDamaged');
