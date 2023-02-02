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


<<<<<<< Updated upstream
route::get('/ariful',function(){
    return ('Welcome ariful');
});

route::get('/samira',function(){
    return ('Welcome samira');
});

Route::get('/', function () {
    return view('welcome');
});
=======
// Route::get('/ariful', function () {
//     return ('welcome ariful');
// });

// route::get('/samira',function(){
//     return('welcome samira');
// });

// route::get('/',function(){
//     return view('home');
// });

// route::get('/about',function(){
//     return view('about');
// });

// route::get('/contact',function(){
//     return view('contact');
// });

use App\Http\Controllers\Site;

// Route::get('/', [Site::class, 'Home']);

// Route::get('/about', [Site::class, 'About']);

// Route::get('/contact', [Site::class, 'Contact']);


// route::get('/{NameValue}',[Site::class, 'name']);


route::get('/{FirstName}/{LastName}',[Site::class, 'name']);


>>>>>>> Stashed changes
