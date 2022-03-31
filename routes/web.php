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

//Route::get('/', function () {
//    return view('home');
//});
Route::get('/home', 'HomeController@home')->name('home.home');

Route::get('create','UserController@index')->name('admin.create');
Route::post('create','UserController@save')->name('admin.postCreate');
Route::get('login','LoginController@index')->name('login');
Route::post('login','LoginController@login');


Route::middleware(['auth'])->group(function (){
    Route::prefix('admin')->group(function (){
        Route::get('index','HomeController@index')->name('admin.index');

    });

    Route::prefix('user')->group(function (){
        Route::get('index', 'HomeController@indexUser')->name('user.index');
    });
    });
