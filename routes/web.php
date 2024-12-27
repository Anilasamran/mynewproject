<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TCPDFController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DescriptionsController;
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

//  products

Route::get('/productslider',
[ProductsController::class,'productslider'])->name('products,productslider');

Route::get('/partialproducts',
[ProductsController::class,'partialproducts'])->name('products,partialproducts');


Route::get('/product/{id}', [ProductsController::class, 'productdetails'])->name('productdetails');

 
Route::get('search',
[ProductsController::class,'search'])->name('products,search');
Route::get('productsorting',
[ProductsController::class,'productsorting'])->name('productsorting');



Route::resource("/products",ProductsController::class);
Route ::get('myproduct',
[ProductsController::class,'index']);
Route ::get('header',
[ProductsController::class,'head']);
Route::get('g',
[ProductsController::class,'create'])->name('products,create');

            //   "Descriptions"
            Route::resource("/descriptions",DescriptionsController::class);
         Route ::get('descriptions',
        [DescriptionsController::class,'index']);

       Route::get('g',
      [DescriptionsController::class,'create'])->name('descriptions.create');

       Route::get('/productdescription',
    [DescriptionsController::class,'productdescription'])->name('productdescription');


