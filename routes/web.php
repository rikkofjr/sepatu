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

//Client url
Route::get('/', 'ClientController@index')->name('index');
Route::get('/status', 'ClientController@status')->name('clientstatus');



Route::get('/home', 'HomeController@index')->name('home');


Route::get('order/{kode}', 'IndexController@ordershow');
//grouping "json" data for administrator ( json-dashboard)
Route::group(['prefix' => 'database/json'], function(){
    Route::get('/order', 'OrderController@dashboardOrderJson')->name('jsonOrder');
});
//dashboard casheer
Auth::routes();
Route::get('/dashboard', 'OrderController@index')->name('dashboard');
Route::group(['prefix' => 'dashboard'], function () {
    // First Route
    Route::resource('permissions', 'PermissionController');
    // Second Route
    Route::resource('roles', 'RoleController');
    // Third Route
    Route::resource('users', 'UserController');
    //update user password
    Route::patch('updatepassword/{id}/update','UserController@updatepassword')->name('updatepassword');
    // Order Route
    Route::resource('order', 'OrderController');
    Route::get('coba1', 'ordercontroller@cobadulu');
    //Order Route Status 
    Route::get('orderstatus/{status}', 'OrderController@status')->name('statusorder');
    //Update Order to Status = 1 
    Route::patch('updateto1/{id_order}/update','OrderController@updateto1')->name('updateto1');
    //Update Order to Status = 2 
    Route::patch('updateto2/{id_order}/update','OrderController@updateto2')->name('updateto2');
    //Update Order to Status = 3 
    Route::patch('updateto3/{id_order}/update','OrderController@updateto3')->name('updateto3');
    //Delete Order 
    Route::patch('softdelete/{id_order}', 'OrderController@softdelete')->name('softdeleteorder');
    Route::get('/na', function () {
        return view('welcome');
    });
    
    
});
