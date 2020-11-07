<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('students','StudentController');
Route::resource('staffs','StaffController');
Route::post('/create_student','StudentController@save')->name('save');
Route::post('/create_staff','StaffController@save')->name('saveStaff');
Route::get('/add_staff','StaffController@staff')->name('addStaff');