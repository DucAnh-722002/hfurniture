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



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


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



require __DIR__.'/auth.php';

