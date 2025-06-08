<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Models\News;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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
    return view('welcome');
});
Route::get('/news',[NewsController::class,'index'])->name('news.index');
Route::get('/news/create',[NewsController::class,'create'])->name('news.create');
Route::post('/news/create',[NewsController::class,'createPost'])->name('news.create_post');

Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::post('/contact',[ContactController::class,'sendEmail'])->name('contact.sendEmail');

Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index-customer');
Route::post('/customer', [CustomerController::class, 'sendEmail'])->name('customer.contact-mail');
