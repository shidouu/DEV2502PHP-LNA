<?php

use App\Http\Controllers\NamedProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/greeting', function () {
    return view('Hello word');
});

Route::get('/devmaster', function () {
    return '<h1>Welcome to, Devmaster Academy! </h1>';
});

Route::redirect('/here', '/there');

Route::get('/there', function () {
    return '<h1> Redirect:: here to there</h1>';
});

route::get('chungtrinh',function(){
return view('chungtrinh');
});

Route::get('/devmaster/{id}', function($id) {
    return '<h1>Devmaster' .$id;
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return '<h1> Post: $postId, Comments: $commentId';
});

Route::get('/user/{id}', function(Request $request,$id) {
    return '<h1>User->' .$id;
});

Route::get('/dev/{name?}',function($name=null){
    return "<h1> Welcome, $name";
});

Route::get('/user-dev/{name?}',function($name='Chung Trịnh'){
    return "<h1> Welcome, $name";
});

Route::get('/user-constraint/{name}', function ($name) {
    return "<h1> Route Constraint [A-Za-z]+ </h1>";
})->where('name', '[A-Za-z]+');

Route::get('/user-constraint/{id}', function ($id) {
    return "<h1> Route Constraint [0-9]+ </h1>";
})->where('id', '[0-9]+');

Route::get('/user-constraint/{id}/{name}', function ($id, $name) {
    return "<h1> Route Constraint ['id' => '[0-9]+', 'name' => '[a-z]+'] </h1>";
})->where(['id' => '[0-9]+','name' => '[a-z]+']);

Route::get('/user-check/{id}/{name}', function ($id, $name) {
    return "<h1> user-check whereNumber('id')->whereAlpha('name') [$id, $name] </h1>";
})->whereNumber('id')->whereAlpha('name');

Route::get('/user-check/{name}', function ($name) {
    return "<h1> user-check whereAlphaNumeric('name') => [$name] </h1>";
})->whereAlphaNumeric('name');

Route::get('/user-check/{id}', function ($id) {
    return "<h1> user-check whereUuid('id') => {$id} </h1>";
})->whereUuid('id');

Route::get('/search/{search?}', function ($search) {
    return "<h1> Tham số trên url là unicode: $search </h1>";
})->where('search','.*');

Route::get('/named/profile', function () {
    return "<h1> Đặt tên Route </h1>";
})->name('named.profile');

Route::get('/named/profile',
    [NamedProfileController::class,'display']
)->name('named.profile');
Route::get('/named/show',[NamedProfileController::class,'show']);


Route::group(['prefix'=>'admin'],function(){
    Route::get('/',function(){return "<h1> Route Admin";});
    Route::get('/account',function(){return "<h1> Route Admin Account";});
    Route::get('/product',function(){return "<h1> Route Admin product";});
});