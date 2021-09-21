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
Auth::routes();
Route::get('/', 'HomeController@welcome')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Admin\LoginController@logout')->name('logout');
Route::get('/track', 'TrackingController@index')->name('track');
Route::get('/clear', function() {

    $exitCode = \Illuminate\Support\Facades\Artisan::call('config:cache');
    $exitCode = \Illuminate\Support\Facades\Artisan::call('config:clear');
    $exitCode = \Illuminate\Support\Facades\Artisan::call('cache:clear');
    $exitCode = \Illuminate\Support\Facades\Artisan::call('view:clear');
    $exitCode = \Illuminate\Support\Facades\Artisan::call('route:clear');
    $exitCode = \Illuminate\Support\Facades\Artisan::call('clear-compiled');
    return 'DONE';
});
Route::get('/track/info','TrackingController@info')->name('info');
Route::get('/track/search','TrackingController@tracking')->name('track_num');

Auth::routes();

Route::prefix('admin')->name('admin.')->group(function (){
    Route::get('/login', 'Admin\LoginController@showLoginForm')->name('login');
    Route::post('/signup', 'Admin\LoginController@login')->name('signup');
    Route::get('/home', 'AdminController@index')->name('home');
    Route::get('/users', 'UserController@index')->name('users');
    Route::get('/user/edit/{id}','UserController@edit')->name('user.edit');
    Route::get('/user/delete/{id}','UserController@destroy')->name('user.delete');
    Route::post('/user/update/{id}','UserController@update')->name('user.update');
    Route::get('/user/create','UserController@create')->name('user.create');
    Route::post('/user/store','UserController@store')->name('user.store');
});




