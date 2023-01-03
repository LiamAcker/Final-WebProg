<?php

use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Public;

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

Route::get('/', function () {
    return view('welcomePage');
});

Route::get('/sign-up', function () {
    return view('signupPage');
});

Route::get('/sign-in', function () {
    return view('signinPage');
});

Route::get('/a-home', function () {
    return view('adminHomePage');
});

Route::get('/m-home', function () {
    return view('memberHomePage');
});