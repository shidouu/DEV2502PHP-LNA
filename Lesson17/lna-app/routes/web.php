<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MonHocController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SinhVienController;
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

#Login
Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.submit');

#Session
Route::get('/session/get',[SessionController::class,'getSessionData'])->name('session.get');
Route::get('/session/set',[SessionController::class,'storeSessionData'])->name('session.set');
Route::get('/session/del',[SessionController::class,'deleteSessionData'])->name('session.del');

#Monhoc
Route::get('/mon-hoc',[MonHocController::class,'getMonHocs'])->name('monhoc.getMonHocs');
Route::get('/mon-hoc/detail/{mamh}',[MonHocController::class,'getMonHocById'])->name('monhoc.getMonHocById');
Route::get('/mon-hoc/create',[MonHocController::class,'create'])->name('monhoc.create');
Route::post('/mon-hoc/create',[MonHocController::class,'createSubmit'])->name('monhoc.createSubmit');

Route::get('/mon-hoc/edit/{mamh}',[MonHocController::class,'edit'])->name('monhoc.edit');
Route::post('/mon-hoc/edit',[MonHocController::class,'editSubmit'])->name('monhoc.editSubmit');

Route::get('/mon-hoc/delete/{mamh}', [MonHocController::class, 'delete'])->name('monhoc.delete');



Route::get('/sinh-vien/detail/{masv}',[SinhVienController::class,'getSinhVienById'])->name('sinhvien.getSinhVienById');
Route::get('/sinh-vien/create',[SinhVienController::class,'create'])->name('sinhvien.create');
Route::post('/sinh-vien/create',[SinhVienController::class,'createSubmit'])->name('sinhvien.createSubmit');

Route::get('/sinh-vien/edit/{masv}',[SinhVienController::class,'edit'])->name('sinhvien.edit');
Route::post('/sinh-vien/edit',[SinhVienController::class,'editSubmit'])->name('sinhvien.editSubmit');

Route::get('/sinh-vien/delete/{masv}', [SinhVienController::class, 'delete'])->name('sinhvien.delete');

Route::get('/sinh-vien',[SinhVienController::class,'index'])->name('sinhvien.index');
