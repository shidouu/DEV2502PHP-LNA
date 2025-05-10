<?php

use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/view1', function(){return view('view1',["name"=>"Devmaster Academy"]);});
Route::get('/view2', function(){return view('view2',['name'=>'Lê Anh', 'arr'=>[1,2,3,4],]);});
Route::get('/view3', function(){return view('view3',['name' => ['Devmaster', 'Academy', 'Lê', 'Anh'], 'arr'=>[10,22,1,15,6,4], 'user'=>[],]);});
Route::get('/', [ProductController::class,'index']);
#Template Blade Layout
Route::get('/home',function(){return view('index');});
Route::get('/about-us',function(){return view('about');});
Route::get('/contact',function(){return view('contact');});
