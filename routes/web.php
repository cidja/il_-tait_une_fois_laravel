<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NovelsController;

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
})->name('home'); //homepage

Route::get('/register', function() {
  return view('pages.frontend.register');
})->name('register'); //if you want to register

Route::get('/login', function() {
  return view('pages.frontend.login');
})->name('login'); // if you want login

/*Route::get('/welcome', function(){
  return view('pages.frontend.welcome');
})->name('welcome'); //after login it's welcome page*/
Route::get('/welcome',[NovelsController::class, "show"])->name('welcome');
//link video to display data https://www.youtube.com/watch?v=y3p10h_00A8&ab_channel=phpstepbystep

Route::get("/singleNovel/{id}", [NovelsController::class, "onlyOne"])->name('singleNovel');


Route::get("getTest", function ($id){
  return view('pages.frontend.getTest');
});

Route::get("test/{id}", function($id=8){
  echo "l'id est : " . $id;
})->name('test');

Route::get('/novel', function(){
  return view('pages.frontend.oneNovel');
})->name('novel'); // to display information for one novel

Route::get('/statistics', function(){
  return view('pages.frontend.statistics');
})->name('statistics');// to display some statistics about your read

Route::get('/addNovel', function(){
  return view('pages.frontend.addNovel');
})->name('addNovel'); // to add novel

Route::get('/account', function(){
  return view('pages.frontend.account');
})->name('account'); // to manage your account
