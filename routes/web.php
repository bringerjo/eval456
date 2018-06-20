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
    return view('listrooms');
});


Route::get('/','RoomController@list');
Route::get('/room/{name}', 'RoomController@show');
Route::get('/booking/{name}', 'BookingController@show');
Route::get('/booking/{name}', 'BookingController@statut');
Route::get('/booking/{id}', 'PostController@create'); 
Route::post('/booking/{id}', 'PostController@save_data');
