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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth','Admin'])->group(function (){

    Route::get('admin/dashboard',function (){
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::resource('admin/user','Admin\UserController');
    Route::resource('admin/file-management','Admin\FileManagementController');

});

Route::middleware(['auth','Employee'])->group(function (){

    Route::get('employee/dashboard',function (){
        return view('employee.dashboard');
    })->name('employee.dashboard');

    Route::get('employee/file-list/{id}','Employee\FileManagementController@show')->name('empolyee.files');

});



