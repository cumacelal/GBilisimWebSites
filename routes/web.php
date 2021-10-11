<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;

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

Route::get('/', [HomeController::class , "index"])->name('main');
Route::get('hakkimizda', [AboutController::class , "index"])->name('about');
Route::get('hizmetler', [ServicesController::class , "index"])->name('services');
Route::get('iletisim', [ContactController::class , "index"])->name('contact');
Route::get('urunler', [ProductController::class , "index"])->name('product');

Route::get('urunler-datay/{slug}', [ProductController::class , "show"])->name('product-detail');

Route::get('mesaj', [MailController::class , "index"])->name('send');

Route::get('game',[PageController::class,"index"])->name('game');