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


Route::get('/ariful', function () {
    return ('welcome ariful');
});

route::get('/samira',function(){
    return('welcome samira');
});

route::get('/',function(){
    return view('home');
});

route::get('/about',function(){
    return view('about');
});

route::get('/contact',function(){
    return view('contact');
});
