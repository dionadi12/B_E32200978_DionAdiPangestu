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
    return view('welcome');
});
//Route::get('/hello', function () {
   // return 'hello world';
//});
//Route::get('/belajar', function () {
    //echo '<h1>hello world</h1>';
	//echo '<p>sedang belajar laravel</p>';
//});
//Route::get('page/{nomor}', function ($nomor) {
   // return 'ini halaman ke-' . $nomor;
//});
//Route::get('/galeri', function () {
    //return view('galeri');
//});
//Route::get('/galeri1', function () {
    //return view('galeri1');
//});
//Route::get('/user', 'Controller1@index');
//Route::resource('/user', 'Controller1');
//Route::get('/coba', function () {
    //return view('coba');
//});
Route::group(['namespace' => 'frontend'], function()
    {
        Route::resource('home', 'HomeController');
    });
Route::group(['namespace' => 'backend'], function()
    {
        Route::resource('dashboard', 'DashboardController');
    });