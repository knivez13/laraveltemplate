<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/sample', [App\Http\Controllers\HomeController::class, 'sample'])->name('sample');

Route::resource('brands', App\Http\Controllers\BrandController::class);


// Route::get('/ewankosau', function () {
//     return view('sample');
// });
