<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BitcoinController;
use App\Http\Controllers\BitcoinPaymentController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Donate
Route::get('/donate', [DonateController::class, 'index'])->name('donate');
Route::post('/donate', [BitcoinPaymentController::class, 'generateNewAddress'])->name('donate-form');

// Payments
Route::get('/confirm', [DonateController::class, 'confirm'])->name('confirm');
Route::post('/confirm', [BitcoinPaymentController::class, 'confirmPayment'])->name('confirm-form');
// Route::get('/', [HomeController::class, 'getWalletBalance'])->name('balance');



// Route::group(['prefix' => 'api'], function()
// {
//     Route::get('detail', function($account_id)
//     {
//         //
//     });
// });


Route::get('/bitcoin', 'BitcoinController@index');

