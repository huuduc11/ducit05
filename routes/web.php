<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/home1', function () {
    return view('home1');
});
Route::get('/gioithieu', function () {
    return view('gioithieu');
});

Route ::get('/register',function(){
    return view('register');
});
Route::get('/login1', function () {
    return view('login1');
});
Route::get('/register1', function () {
    return view('register1');
});
*/
Route::group(['prefix' => 'admin'], function() {
    //
    Route::get('/index', function () {
        return view('admin.index');
    })->middleware('admin');
    Route::get('/login', function () {
        return view('admin.login');
    })->middleware('admin');
    Route::get('/password', function () {
        return view('admin.password');
    })->middleware('admin');
    
    Route::get('/register' , function () {
        return view ('admin.register');
    });
});
