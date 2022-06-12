<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('layouts.app');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// produks
Route::group(['middleware' => ['auth', 'role:admin']], function() {
    Route::get('/produks', 'ProdukController@index');
    Route::get('produks/create', 'ProdukController@create');
    Route::post('produks', 'ProdukController@store');
    Route::get('produks/edit{id}', 'ProdukController@edit');
    Route::put('produks{id}', 'ProdukController@update');
    Route::delete('produks{id}', 'ProdukController@destroy');
});


// incomes
Route::group(['middleware' => ['auth', 'role:admin']], function() {
    Route::get('/incomes', 'IncomesController@index');
    Route::get('incomes/create', 'IncomesController@create');
    Route::post('incomes', 'IncomesController@store');
    Route::get('incomes/edit/{id}', 'IncomesController@edit');
    Route::put('incomes/{id}', 'IncomesController@update');
    Route::delete('incomes/{id}', 'IncomesController@destroy');
});

// expenditures
Route::group(['middleware' => ['auth', 'role:admin']], function() {
    Route::get('/expenditures', 'ExpendituresController@index');
    Route::get('expenditures/create', 'ExpendituresController@create');
    Route::post('expenditures', 'ExpendituresController@store');
    Route::get('expenditures/edit/{id}', 'ExpendituresController@edit');
    Route::put('expenditures/{id}', 'ExpendituresController@update');
    Route::delete('expenditures/{id}', 'ExpendituresController@destroy');
});
