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


Route::get('login', 'LoginController@index')->name('login');
Route::post('login', 'LoginController@login');
Route::get('logout', 'LoginController@logout')->name('logout');

// bổ sung thêm code 403 sau khi hoàn thành tại đây
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        // user
        Route::get('index', 'HomeController@index')->name('admin.index');
        Route::get('create', 'UserController@index')->name('admin.create'); // tạo tài khoản cho nhân viên
        Route::post('create', 'UserController@save')->name('admin.postCreate');
        Route::get('list', 'UserController@list')->name('admin.listUser');

        //customer
        Route::prefix('customer')->group(function (){
            Route::get('create','CustomerController@create')->name('admin.customer.create');
            Route::post('create','CustomerController@store')->name('admin.customer.store');
        });

        // project
        Route::get('project', 'ProjectController@index')->name('admin.listProject');
        Route::get('project/create', 'ProjectController@create')->name('admin.createProject');
        Route::post('project/create', 'ProjectController@store')->name('admin.storeProject');
        // edit
        Route::get('project/edit/{id}', 'ProjectController@edit')->name('admin.editProject');
        Route::post('project/edit/{id}', 'ProjectController@save')->name('admin.saveProject');

        // building
        Route::prefix('building')->group(function () {
            Route::get('/list', 'BuildingController@index')->name('admin.buildingIndex');
            Route::get('/create', 'BuildingController@create')->name('admin.buildingCreate');
            Route::post('/create', 'BuildingController@store')->name('admin.buildingStore');
            //edit building
            Route::get('edit/{id}', 'BuildingController@edit')->name('admin.buildingEdit');
            Route::post('edit/{id}', 'BuildingController@update')->name('admin.update');
        });

        //product
        Route::prefix('product')->group(function () {
            Route::get('/list', 'ProductController@index')->name('admin.productList');
            Route::get('/create', 'ProductController@create')->name('admin.productCreate');
            Route::post('/create', 'ProductController@store')->name('admin.productStore');
        });

    });

    Route::prefix('user')->group(function () {
        Route::get('index', 'HomeController@indexUser')->name('user.index');
        Route::prefix('product')->group(function (){
            Route::get('create', 'OrderController@create')->name('user.createOrder');
            Route::post('create', 'OrderController@store')->name('user.storeOrder');
        });
    });
});
