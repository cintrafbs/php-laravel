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

Route::get('/users','UserController@index')->name('users.index');
Route::get('/customers','CustomerController@index')->name('customers.index');
Route::get('/customers/create','CustomerController@create')->name('customers.create');
Route::get('/', 'HomeController@index')->name('home');
