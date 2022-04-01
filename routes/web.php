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


Route::get('login','LoginController@index')->name('login');
Route::post('login','LoginController@login');
Route::get('logout','LoginController@logout')->name('logout');

// bổ sung thêm code 403 sau khi hoàn thành tại đây
Route::middleware(['auth'])->group(function (){
    Route::prefix('admin')->group(function (){
        Route::get('index','HomeController@index')->name('admin.index');
        Route::get('create','UserController@index')->name('admin.create'); // tạo tài khoản cho nhân viên
        Route::post('create','UserController@save')->name('admin.postCreate');
        Route::get('project','ProjectController@index')->name('admin.listProject');
        Route::get('project/create','ProjectController@create')->name('admin.createProject');

    });

    Route::prefix('user')->group(function (){
        Route::get('index', 'HomeController@indexUser')->name('user.index');
    });
    });
