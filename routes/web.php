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

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/register', function() {
  return view('pages.frontend.register');
})->name('register');

Route::get('/login', function() {
  return view('pages.frontend.login');
})->name('login');

Route::get('/welcome', function(){
  return view('pages.frontend.welcome');
})->name('welcome');

Route::get('/novel', function(){
  return view('pages.frontend.onenovel');
})->name('novel');

Route::get('/statistics', function(){
  return view('pages.frontend.statistics');
})->name('statistics');
