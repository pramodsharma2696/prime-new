<?php

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
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/forex', function () {
    return view('trading.forex');
})->name('forex');

Route::get('/equities', function () {
    return view('trading.equities');
})->name('equities');

Route::get('/indices', function () {
    return view('trading.indices');
})->name('indices');

Route::get('/commodities', function () {
    return view('trading.commodities');
})->name('commodities');

Route::get('/account', function () {
    return view('trading.account');
})->name('account');

Route::get('/tools', function () {
    return view('trading.tools');
})->name('tools');

Route::get('/conditions', function () {
    return view('trading.conditions');
})->name('conditions');

Route::get('/cryptocurrencies', function () {
    return view('trading.cryptocurrencies');
})->name('cryptocurrencies');