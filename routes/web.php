<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TCPDFController;
use App\Http\Controllers\OrdersController;
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
Route::get('/generatepdf',[TCPDFController::class,'generatepdf']);
Route::resource("/orders",OrdersController::class);
Route::get('/orders', [OrdersController::class, 'index']);

Route::get('/orders_pdf', [OrdersController::class, 'generatePDF'])->name('orders_pdf');