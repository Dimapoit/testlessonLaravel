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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'HomeController@index')->name('main');

Route::post('/save-car', 'HomeController@saveCar')->name('save.car');

Route::get('car/edit/{id}', 'HomeController@edit')->name('car.edit');

Route::patch('car/update/{id}', 'HomeController@update')->name('car.update');

Route::delete('car/delete/{id}', 'HomeController@delete')->name('car.delete');
