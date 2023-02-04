<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site;

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
    //BASIC ROUTING
// Route::get('/', function () {
//     return ('welcome Home');
// });
// Route::get('/ariful', function () {
//     return ('welcome ariful');
// });

// route::get('/samira',function(){
//     return('welcome samira');
// });

    //ROUTING WITH VIEW
// route::get('/',function(){
//     return view('home');
// });

// route::get('/about',function(){
//     return view('about');
// });

// route::get('/contact',function(){
//     return view('contact');
// });

    //ROUTING WITH CONTROLLER ALSO HYPERLINK
// Route::get('/', [Site::class, 'Home']);

// Route::get('/about', [Site::class, 'About']);

// Route::get('/contact', [Site::class, 'Contact']);

    //ROUTING WITH PARAMETER
route::get('/{Name}',[Site::class, 'name']);


// route::get('/{Name_1}/{Name_2}',[Site::class, 'name_1']);


