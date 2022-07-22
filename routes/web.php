<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
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

Route::resource('descuents', App\Http\Controllers\DescuentController::class)->middleware('auth');
Route::resource('cooperatives', App\Http\Controllers\CooperativeController::class)->middleware('auth');
Route::resource('clients', App\Http\Controllers\ClientController::class)->middleware('auth');
Route::resource('lotes', App\Http\Controllers\LoteController::class)->middleware('auth');
Route::resource('quincenas', App\Http\Controllers\QuincenaController::class)->middleware('auth');
Route::resource('diarias', App\Http\Controllers\DiariaController::class)->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/lotes/create', [App\Http\Controllers\SearchController::class, 'show']);