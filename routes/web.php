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

// Route::get('/', function () {
//     return view('layouts.app');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/admin', function () {
    return view('dashboard.homepage.index');
});

// Route::get('/produk', function () {
//     return view('produk');
// });
Route::get('/produk', [App\Http\Controllers\ProdukController::class, 'indexProduk']);

Route::get('/profile', function () {
    return view('profile');
});

// Route::get('/admin/rekapitulasi-pendapatan', function () {
//     return view('dashboard.rekapitulasi.pendapatan.index');
// });

// Route::get('/admin/rekapitulasi-pendapatan-add/', function () {
//     return view('dashboard.rekapitulasi.pendapatan.add');
// });

// Route::get('/admin/rekapitulasi-pengeluaran', function () {
//     return view('dashboard.rekapitulasi.pengeluaran.index');
// });

// Route::get('/admin/rekapitulasi-pengeluaran-add', function () {
//     return view('dashboard.rekapitulasi.pengeluaran.add');
// });

// PRODUK -------------------------
Route::get('/admin/produk', function () {
    return view('dashboard.produk.index');
});

Route::get('/admin/produk-add', function () {
    return view('dashboard.produk.add');
});

// grafik
Route::get('/admin/grafik', function () {
    return view('dashboard.grafik.index');
});

Route::get('/admin/grafik', [App\Http\Controllers\GrafikController::class, 'grafik']);

// homepage setting
Route::group(['middleware' => ['auth', 'role:admin']], function() {
    Route::put('admin/home-description-update/{id}', [App\Http\Controllers\HomeController::class, 'updateDescription']);
    Route::get('admin/home-jumbotron-create', [App\Http\Controllers\HomeController::class, 'createJumbotron']);
    Route::delete('admin/home-jumbotron-delete/{id}', [App\Http\Controllers\HomeController::class, 'destroyJumbotron']);
    Route::get('admin/home-produk-create', [App\Http\Controllers\HomeController::class, 'createProduk']);
    Route::delete('admin/home-produk-delete/{id}', [App\Http\Controllers\HomeController::class, 'destroyProduk']);
    Route::get('admin/home-suggestion-create', [App\Http\Controllers\HomeController::class, 'createSuggestion']);
    Route::delete('admin/home-suggestion-delete/{id}', [App\Http\Controllers\HomeController::class, 'destroySuggestion']);
});


// produks
Route::group(['middleware' => ['auth', 'role:admin']], function() {
    Route::get('admin/produk', [App\Http\Controllers\ProdukController::class, 'index']);
    Route::get('admin/produk-create', [App\Http\Controllers\ProdukController::class, 'create']);
    Route::post('admin/produk-store', [App\Http\Controllers\ProdukController::class, 'store']);
    Route::get('admin/produk-edit/{id}', [App\Http\Controllers\ProdukController::class, 'edit']);
    Route::put('admin/produk-update/{id}', [App\Http\Controllers\ProdukController::class, 'update']);
    Route::delete('admin/produk-delete/{id}', [App\Http\Controllers\ProdukController::class, 'destroy']);
});


// incomes
Route::group(['middleware' => ['auth', 'role:admin']], function() {
    Route::get('admin/incomes', [App\Http\Controllers\IncomeController::class, 'index']);
    Route::get('admin/incomes-create', [App\Http\Controllers\IncomeController::class, 'create']);
    Route::post('admin/incomes-store', [App\Http\Controllers\IncomeController::class, 'store']);
    Route::get('admin/incomes-edit/{id}', [App\Http\Controllers\IncomeController::class, 'edit']);
    Route::put('admin/incomes-update/{id}', [App\Http\Controllers\IncomeController::class, 'update']);
    Route::delete('admin/incomes-delete/{id}', [App\Http\Controllers\IncomeController::class, 'destroy']);
});

// expenditures
Route::group(['middleware' => ['auth', 'role:admin']], function() {
    Route::get('admin/expenditures', [App\Http\Controllers\ExpenditureController::class, 'index']);
    Route::get('admin/expenditures-create', [App\Http\Controllers\ExpenditureController::class, 'create']);
    Route::post('admin/expenditures-store', [App\Http\Controllers\ExpenditureController::class, 'store']);
    Route::get('admin/expenditures-edit/{id}', [App\Http\Controllers\ExpenditureController::class, 'edit']);
    Route::put('admin/expenditures-update/{id}', [App\Http\Controllers\ExpenditureController::class, 'update']);
    Route::delete('admin/expenditures-delete/{id}', [App\Http\Controllers\ExpenditureController::class, 'destroy']);
});
