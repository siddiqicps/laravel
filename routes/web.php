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

Route::get('/home', 'HomeController@index');
Route::get('/users', 'UserController@index');
Route::get('/roles', 'RoleController@index');
Route::get('/clients', 'ClientController@index');
Route::get('/client/add', ['as'=>'client.add', 'uses'=>'ClientController@createClient']);
Route::get('/references', 'ReferenceController@index');
Route::get('/contacts', 'ContactController@index');
Route::get('/cases', 'CaseController@index');