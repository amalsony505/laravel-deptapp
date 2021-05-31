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

Route::get('/', function () {return view('home');});

Route::get('/aboutus', function () {return view('aboutus');});

Route::get('/dept', function () {return view('department');});

Route::get('/contact', function () {return view('contact');});

Route::get('/signup', function () {return view('signup');});

Route::get('/gallery', function () {return view('gallery');});
