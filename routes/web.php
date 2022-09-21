<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeConntroller;
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
//     return view('welcome');
// });

//categories
Route::get('/', [HomeConntroller::class, 'index']);
Route::get('theloai/{id}',[HomeConntroller::class,'sptloai'])->name('sptl');
Route::get('/news',function(){
        return view('client/news/list');
});
Route::get('/news/details',function(){
        return view('client/news/details');
});
//products
Route::get('/product',function(){
        return view('ciclient/products/list');
});
Route::get('/product/details',function(){
        return view('ciclient/product/details');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
