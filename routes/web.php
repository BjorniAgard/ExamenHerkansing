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
    return view('home');
});

Route::resource('course', 'CoursesController');
Route::resource('cart', 'CartsController');
Route::get('/course/{course}/createUserCourse', 'CoursesController@createUserCourse')->name('createUserCourse.create');
Route::post('course/store', 'CoursesController@storeUserCourse')->name('storeUserCourse.store');
Route::delete('course/{course}/course', 'CoursesController@destroyUserCourse')->name('destroyUserCourse.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
