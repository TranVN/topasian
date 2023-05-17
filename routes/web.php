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
Route::get('/picking-service', function () {
    return view('pages.pickingService');
});
Route::get('/full-inspection', function () {
    return view('pages.fullInspection');
});
Route::get('/our-laboratory', function () {
    return view('pages.ourLaboratory');
});
Route::get('/testing-cope', function () {
    return view('pages.testingCope');
});
Route::get('/factory-audit', function () {
    return view('pages.factoryAudit');
});
Route::get('/textile', function () {
    return view('pages.textile');
});
Route::get('/homeware', function () {
    return view('pages.homeware');
});

Route::get('/recreational', function () {
    return view('pages.recreational');
});
Route::get('/electrical', function () {
    return view('pages.electrical');
});
Route::get('/printing-packaging', function () {
    return view('pages.printingPackaging');
});
Route::get('/fashion-accessories', function () {
    return view('pages.fashionAccessories');
});
Route::get('/bodycare', function () {
    return view('pages.bodycare');
});
Route::get('/agriculture', function () {
    return view('pages.agriculture');
});
Route::get('/constructions-mechanical-items', function () {
    return view('pages.mechanicalItems');
});
Route::get('/toy-children-testing', function () {
    return view('pages.childrenProductTesting');
});
Route::get('/california-proposition-65-compliance', function () {
    return view('pages.caPropostion');
});
Route::get('/food-contact-tests', function () {
    return view('pages.foodContact');
});
Route::get('/ce-rohs-reach', function () {
    return view('pages.reach');
});


Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
