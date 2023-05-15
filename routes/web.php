<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/news', function () {
    return view('pages.news');
});
Route::get('/pre-shipment-inspection', function () {
    return view('pages.services');
});
Route::get('/product-inspection', function () {
    return view('pages.productInspection');
});
Route::get('/during-product-inspection', function () {
    return view('pages.duringProduction');
});
Route::get('/pre-product-inspection', function () {
    return view('pages.preProductionInspection');
});
Route::get('/loading-supervision', function () {
    return view('pages.loadingSupervision');
});
Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
