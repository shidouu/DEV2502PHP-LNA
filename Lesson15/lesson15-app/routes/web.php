<?php

use App\Http\Controllers\KhoaController;
use App\Http\Controllers\MonHocController;
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
    return view('welcome');
});
Route::get('/khoa',[KhoaController::class,'index'])->name('khoa.index');
Route::get('/khoa/detail/{makh}',[KhoaController::class,'detail'])->name('khoa.detail');
Route::get('/khoa/create',[KhoaController::class,'create'])->name('khoa.create');
Route::post('/khoa/create', [KhoaController::class, 'createSubmit'])->name('khoa.createSubmit');

Route::get('/monhoc',[MonHocController::class,'index'])->name('monhoc.index');
Route::get('/monhoc/detail/{mamh}',[MonHocController::class,'detail'])->name('monhoc.detail');
Route::get('/monhoc/create',[MonHocController::class,'create'])->name('monhoc.create');
Route::post('/monhoc/create', [MonHocController::class, 'createSubmit'])->name('monhoc.createSubmit');

Route::get('/khoa/edit/{makh}',[KhoaController::class,'edit'])->name('khoa.edit');
Route::post('/khoa/edit', [KhoaController::class, 'editSubmit'])->name('khoa.editSubmit');

Route::get('/khoa/delete/{makh}',[KhoaController::class,'delete'])->name('khoa.delete');

Route::get('/monhoc/edit/{makh}',[MonHocController::class,'edit'])->name('monhoc.edit');
Route::post('/monhoc/edit', [MonHocController::class, 'editSubmit'])->name('monhoc.editSubmit');

Route::get('/monhoc/delete/{makh}',[MonHocController::class,'delete'])->name('monhoc.delete');
