<?php

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

Route::get('/login/customer', function () {
    return view('login.customer');
});

Route::get('/login/company', function () {
    return view('login.company');
});

Route::get('/home/company', function () {
    return view('home.company');
});

Route::get('/home/customer', function () {
    return view('home.customer');
});

Route::post('/register', 'Controller@login');
