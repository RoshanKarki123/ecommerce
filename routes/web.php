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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/login','Backend\Auth\LoginController@showLoginForm');
Route::post('/admin/login','Backend\Auth\LoginController@submitLoginForm')->name('admin.login');

Route::get('/teacher/login','Teacher\Auth\AuthController@showLoginForm');
Route::post('/teacher/login','Teacher\Auth\AuthController@login')->name('teacher.login');

Route::get('/student/login','Student\Auth\AuthController@showLoginForm');
Route::post('/student/login','Student\Auth\AuthController@login')->name('student.login');

Route::get('/teacher/dashboard','Teacher\HomeController@index');
Route::get('/student/dashboard','Student\HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
