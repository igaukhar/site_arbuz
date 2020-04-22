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

Route::get('/', function (){
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Auth::routes(['verify' => true]);
Route::get('/login2', 'HomeController@login')->name('login2');
Route::get('change-password', 'Auth\ChangePasswordController@index')->name('password.change');
Route::post('change-password', 'Auth\ChangePasswordController@changepassword')->name('password.update');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(
    function (){
        Route::resource('/users', 'UsersController', ['except'=>['show', 'create', 'store']]);
    }
);

Route::namespace('Author')->prefix('author')->name('author.')->group(
    function (){
        Route::resource('/products', 'ProductsController');
    }
);

