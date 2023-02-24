<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BitcoinPaymentController;
use App\Http\Controllers\BitcoinController;
use App\Http\Controllers\LightningPaymentController;
use App\Http\Controllers\CauseController;
use App\Http\Controllers\DonateController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// User routes

// Home
// Route::get('/', [HomeController::class, '']);

// Bitcoin payment
Route::get('/generate-address', [BitcoinPaymentController::class, 'generateNewAddress']);
Route::get('/donations', [BitcoinPaymentController::class, 'getWalletBalance']);
// Route::post('/bitcoin/payments', [BitcoinPaymentController::class, 'generateNewAddress']);

// Charity cases
// Route::post('/add-cases', [CauseController::class, 'store']);
Route::get('/causes', [CauseController::class, 'index']);
Route::get('/causes/{id}', [CauseController::class, 'show']);
// Route::put('/cases/{id}', [CauseController::class, 'update']);
// Route::post('/raised-donations/{id}', [CauseController::class, '']);

// Donate
// Route::get('/donateform', [DonateController::class, 'index']);
// Route::post('/donate', [DonateController::class, 'postDonationForm']);

// Lightning payment
Route::get('/invoice', [LightningPaymentController::class, 'generateInvoice']);
// Route::get('/invoice/{id}', [LightningPaymentController::class, '']);
// Route::post('/lightning/payments', [LightningPaymentController::class, '']);



// Testing Purpose
// Route::get('/bitcoin', [BitcoinController::class, 'index']);
