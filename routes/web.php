<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\productController;


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
//index
Route::get('/', function () {
    return view('client/index');
});

// categories
Route::get('/product-by-category', function () {
    return view('client/categories/list');
});

//news
Route::get('/news', function () {
    return view('client/news/list');
});
Route::get('/news/details', function () {
    return view('client/news/details');
});

//products
Route::get('/product', function () {
    return view('client/products/list');
});
Route::get('/product/details/{id}',[productController::class,'details']);


