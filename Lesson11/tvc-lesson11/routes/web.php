<?php

use App\Http\Controllers\ViewDemoController;
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
Route::get('/view1',function(){
    return view('view1');
});
Route::get('/view2',function(){
    return view('view2',["name"=>"Chung Trịnh"]);
});
Route::get('/view3',function(){
    return view('view3',["name"=>"Chung Trịnh"]);
});
Route::get('/view4',[ViewDemoController::class,'view4'])->name('view4');