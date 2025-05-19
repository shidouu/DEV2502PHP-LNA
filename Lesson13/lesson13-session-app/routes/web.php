<?php

use App\Http\Controllers\LoginAppController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
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
Route::get('/home', function () {
    return view('index');
});
Route::get('/about-us', function () {
    return view('about');
});
Route::get('/contact-us', function () {
    return view('contact');
});
#Login
Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.submit');
#Register
Route::get('/register',[RegisterController::class,'index'])->name('register.index');
Route::post('/register',[RegisterController::class,'registerSubmit'])->name('register.submit');
#Session
Route::get('/session/get',[SessionController::class,'getSessionData'])->name('session.get');
Route::get('/session/set',[SessionController::class,'storeSessionData'])->name('session.set');
Route::get('/session/delete',[SessionController::class,'deleteSessionData'])->name('session.delete');
#Login-Session
Route::get('/loginApp',[LoginAppController::class,'index'])->name('loginApp.index');
Route::post('/loginApp',[LoginAppController::class,'loginAppSubmit'])->name('LoginApp.submit');
