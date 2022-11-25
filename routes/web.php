<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CountriesController;

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


Route::get('payment', [PaymentController::class,'index']);
Route::post('charge', [PaymentController::class,'charge']);
Route::get('success', [PaymentController::class,'success']);
Route::get('error', [PaymentController::class,'error']);


Route::get('ajax', [HomeController::class,'ajax'])->name('ajax');
Route::get('ajax/payments', [HomeController::class,'getTransactions'])->name('getTransactions');



Route::get('/countries-list',[CountriesController::class, 'index'])->name('countries.list');
Route::post('/add-country',[CountriesController::class,'addCountry'])->name('add.country');
Route::get('/getCountriesList',[CountriesController::class, 'getCountriesList'])->name('get.countries.list');

